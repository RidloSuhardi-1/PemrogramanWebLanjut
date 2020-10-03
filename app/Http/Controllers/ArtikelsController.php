<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArtikelsController extends Controller
{
    public function artikelFind($id) {
        $article = Article::find($id);

        return view('childKuis.artikel', ['id' => $id], compact('article'));
    }
}
