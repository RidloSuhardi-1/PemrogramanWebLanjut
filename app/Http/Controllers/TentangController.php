<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class TentangController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function __invoke() {
        $about = About::all();
        return view('childKuis.about', ['about' => $about]);
    }
}
