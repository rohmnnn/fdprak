<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return 'Halaman ngIndex';
    }

    public function lopyou()
    {
        return view('por');
    }

    public function nilai(){
        return view('siswas', ['nama' => 'Muhammad Fatkhurrohman','nim' => '19.01.4403', 'nilai' => 69]);
    }
}
