<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return 'Halaman Index';
    }

    public function lopyou()
    {
        return view('por');
    }

    public function nilai(){
        return view('siswas', ['nama' => 'Anjas Putri', 'nilai' => 69]);
    }
}
