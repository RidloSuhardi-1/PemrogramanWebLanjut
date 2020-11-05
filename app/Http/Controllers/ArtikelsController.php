<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class ArtikelsController extends Controller
{
    public function artikelFind($id) {
        $article = Article::find($id);
        $comment = Comment::all()->where('artikels_id', $id);
        return view('childKuis.artikel', ['id' => $id], ['article' => $article])->with(compact('comment'));
    }
}
