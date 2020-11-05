<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class ManageController extends Controller
{
    public function index() {
        $article = Article::all();
        return view('childKuis.manage', ['article' => $article]);
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
        $comment = Comment::all()->where('artikels_id', $id);
        $comment->each->delete();
        $article->delete();
        return redirect('/manage');
    }

    // Comment
    
    public function addCom($id, Request $request) {
        $comment = new Comment;

        $comment->artikels_id = $request->artikels_id;
        $comment->name = $request->name;
        $comment->content = $request->content;
        $comment->comment_id = $request->comment_id;
        $comment->save();

        return redirect('/articles/'.$id.'#C');
    }

    public function delCom($id, $articleID) {
        $comment = Comment::find($id);
        $comment->delete();

        return redirect('/articles/'.$articleID.'#C');
    }
}
