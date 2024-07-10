<?php

namespace App\Http\Controllers\Guest;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FasilitasController extends Controller
{
    public function index()
    {
        return view('guest.fasilitas.fasilitas', [
            'fasilitas'  => Fasilitas::latest()->take(8)->get(),
        ]);
    }

    // Method untuk menampilkan detail fasilitas berdasarkan slug
    public function show($slug)
    {
        $fasilitas = Fasilitas::where('slug', $slug)->firstOrFail();
        return view('guest.fasilitas.fasilitas-show', compact('fasilitas'));
    }
}
