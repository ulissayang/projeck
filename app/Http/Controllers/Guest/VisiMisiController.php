<?php

namespace App\Http\Controllers\Guest;


use App\Models\VisiMisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visi = VisiMisi::where('jenis', 'visi')->latest()->first();
        $misi = VisiMisi::where('jenis', 'misi')->latest()->first();

        return view('guest.visi-misi.visi-misi', [
            'visi' => $visi,
            'misi' => $misi
        ]);
    }
}
