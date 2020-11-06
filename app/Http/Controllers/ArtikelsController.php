<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class ArtikelsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function artikelFind($id) {
        $article = Article::find($id);
        $comment = Comment::all()->where('artikels_id', $id);
        return view('childKuis.artikel', ['id' => $id], ['article' => $article])->with(compact('comment'));
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
