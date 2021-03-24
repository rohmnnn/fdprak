<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

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

// Route::get('/siswa', function() {
//     return view('siswas', ['nama' => 'Angjas Putri', 'nilai' => 72]);
// });

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


// lalapel 7 route style
Route::get('page', 'PageController@index'); 

// lalapel 8 route style
Route::get('lopyou', [PageController::class,'lopyou']); 


Route::get('nilai', [PageController::class,'nilai']); 

Route::get('form', 'PendaftaranController@index')->name('form.index'); 
Route::post('form', 'PendaftaranController@cek')->name('form.cek'); 

Route::get('calc', 'CalcController@index')->name('calc.index'); 
Route::post('calc', 'CalcController@ah')->name('calc.ah'); 
