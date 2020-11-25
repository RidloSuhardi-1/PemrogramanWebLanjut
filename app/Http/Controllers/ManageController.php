<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Article;
use App\User;
use App\Comment;
use PDF;

class ManageController extends Controller
{
    public function __construct() {
        // $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if(Gate::allows('manage-articles')) return $next ($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }

    public function articlesView() {
        $article = Article::paginate(5);
        return view('childKuis.manageArticles', ['article' => $article]);
    }

    // proses
    public function add() {
        return view('childKuis.addArticle');
    }

    public function create(Request $request) {
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image_name,
            'writer' => $request->writer
        ]);
        return redirect('/manageArticles');
    }

    public function edit($id) {
        $article = Article::find($id);
        return view('childKuis.editArticle', ['article' => $article]);
    }

    public function update($id, Request $request) {
        $article = Article::find($id);

        $article->title = $request->title;
        $article->content = $request->content;

        // remove image
        // if image request is exist, then remove existing image on storage
        if($request->hasFile('image')) {
            if($article->image && file_exists(storage_path('app/public/' . $article->image)))
            {
                \Storage::delete('public/'.$article->image);
            }
            // change with new image
            $image_name = $request->file('image')->store('images', 'public');
            $article->image = $image_name;
        }

        $article->writer = $request->writer;

        $article->save();

        return redirect('/manageArticles');
    }

    public function delete($id) {
        $article = Article::find($id);

        if($article->image && file_exists(storage_path('app/public/' . $article->image)))
        {
            \Storage::delete('public/'.$article->image);
        }

        $comment = Comment::all()->where('artikels_id', $id);
        $comment->each->delete();
        $article->delete();
        return redirect('/manageArticles');
    }

    // search
    public function searchArticle(Request $request) {
        // $article = Article::when($request->keyword, function ($query) use ($request) {
        //     $query->where('title', 'like', '%'.$request->keyword.'%');
        // })->get();
        $article = Article::where('title', 'like', '%'.$request->keyword.'%')->paginate(5);

        return view('childKuis.manageArticles', compact('article'));
    }

    // cetak PDF
    public function cetak_pdf() {
        $article = Article::all();
        $pdf = PDF::loadview('childKuis.artikel_pdf', ['article' => $article]);
        return $pdf->stream();
    }
}
