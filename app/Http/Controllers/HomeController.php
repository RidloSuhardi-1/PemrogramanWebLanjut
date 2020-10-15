<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        Cache::rememberForever('artikels', function() {
            return Article::all();
        });
        
        $artikels = Cache::get('artikels');
        $artikels = Article::paginate(6);
        return view('childKuis.home', ['artikels' => $artikels]);
    }
}
