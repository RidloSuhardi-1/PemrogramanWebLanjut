<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArtikelsController extends Controller
{
    public function index() {
        $article = Article::all();
        return view('childKuis.manage', ['article' => $article]);
    }

    public function artikelFind($id) {
        $article = Article::find($id);

        return view('childKuis.artikel', ['id' => $id], ['article' => $article]);
    }

    // proses
    public function add() {
        return view('childKuis.addArticle');
    }

    public function create(Request $request) {
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image,
            'writer' => $request->writer
        ]);
        return redirect('/manage');
    }

    public function edit($id) {
        $article = Article::find($id);
        return view('childKuis.editArticle', ['article' => $article]);
    }
    
    public function update($id, Request $request) {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->image = $request->image;
        $article->writer = $request->writer;
        $article->save();

        return redirect('/manage');
    }

    public function delete($id) {
        $article = Article::find($id);
        $article->delete();

        return redirect('/manage');
    }
}
