<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsultasi;

class KonsultasiController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'keluhan' => 'required',
            'poli' => 'required',
            'no_telp' => 'required',
        ]);

        Konsultasi::create($request->all());
        return redirect()->back()->with('success', 'Data konsultasi berhasil dikirim.');
    }
}

