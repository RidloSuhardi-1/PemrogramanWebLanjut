<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'NIM : 1931710137<br>Nama : Ahmad Ridlo Suhardi';
    }

    public function articles($id) {
        return 'Halaman artikel dengan id '.$id;
    }
}
