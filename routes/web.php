<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "<h2>Halaman About</h2>";
});

Route::get('/halo/{nama}', function ($nama) {
    return "nm km : " . $nama;
});

Route::get('/datasiswa', function () {
    return view('datasiswa');
});

Route::get('/porich', function () {
    return view('siswa', [
        'siswas' => ['Andi', 'Budi', 'Citra', 'Anjas Putri']
    ]);
});

Route::get('/siswa', function() {
    return view('siswas', ['nama' => 'Angjas Putri', 'nilai' => 72]);
});

Route::get('/por', function() {
    return view('por');
});

Route::get('/home2', function() {
    return view('home2');
});

Route::get('home', function () {
    return view('home');
})->name('home');                             

Route::get('about', function () {
    return view('about');
})->name('about');                             

