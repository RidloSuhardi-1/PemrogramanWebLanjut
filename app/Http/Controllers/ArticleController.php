<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function articles($id) {
        $articleFind = Article::find($id);

        return view('article', ['id' => $id])->with(compact('articleFind'));
    }
}
