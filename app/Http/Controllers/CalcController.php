<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function index()
    {
        return view('calc', ['validated' => null]);
    }

    public function ah(Request $request)
    {
        $validated = $request->validate([
            'angkasatu' => 'required|numeric',
            'angkadua' => 'required|numeric',
            'operasi' => 'required',
        ]);

        // dd($validated);

        //ifelse yg ada di form bisa juga dipindah disini dan langsung saja with statu ganti ke hasil nya.

        return redirect()->route('calc.index')->with('status', $validated);

    }
}
