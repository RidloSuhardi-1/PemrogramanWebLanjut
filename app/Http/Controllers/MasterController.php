<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Article;

class MasterController extends Controller
{
    public function articleList() {
        Cache::rememberForever('artikels', function() {
            return Article::all();
        });
        
        $artikels = Cache::get('artikels');
        $artikels = Article::paginate(6);
        return view('childKuis.home', ['artikels' => $artikels], compact('artikels'));
    }
}
