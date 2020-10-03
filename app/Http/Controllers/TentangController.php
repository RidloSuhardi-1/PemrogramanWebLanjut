<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class TentangController extends Controller
{
    public function __invoke() {
        $about = About::all();
        return view('childKuis.about', compact('about'));
    }
}
