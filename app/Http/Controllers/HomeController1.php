<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;

class HomeController1 extends Controller
{
    public function home() {
        Cache::rememberForever('articles', function() {
            return Article::all();
        });

        $articles = Article::all();
        $articles = Cache::get('articles');
        return view('home1', compact('articles'));
    }
}
