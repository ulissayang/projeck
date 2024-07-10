<?php

namespace App\Http\Controllers\Guest;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrestasiController extends Controller
{

    public function index()
    {
        $prestasi = Prestasi::with('user')
            ->latest()
            ->paginate(6);
        return view('guest.prestasi.prestasi', compact('prestasi'));
    }

    public function show($slug)
    {
        $prestasi = Prestasi::with('user')
            ->where('slug', $slug)
            ->firstOrFail();
        return view('guest.prestasi.prestasi-show', compact('prestasi'));
    }
}
