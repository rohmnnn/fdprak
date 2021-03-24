<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('form');
    }
    
    public function cek(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
        ]);

        dd($validated);
    
    }
}
