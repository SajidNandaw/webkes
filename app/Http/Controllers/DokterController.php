<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function index(Request $request)
    {
        $query = Dokter::query();

        if ($request->has('search')) {
            $search = $request->search;
            $query->where('nama', 'like', "%{$search}%")
                  ->orWhere('spesialis', 'like', "%{$search}%");
        }

        $dokters = $query->get();

        return view('dokter', compact('dokters'));
    }
}
