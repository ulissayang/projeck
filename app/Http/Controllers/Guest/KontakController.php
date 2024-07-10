<?php

namespace App\Http\Controllers\Guest;

use App\Models\Pengaturan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = Pengaturan::select('alamat', 'telp', 'email', 'map', 'jam_kerja')->firstOrFail();
        return view('guest.kontak', compact('kontak'));
    }
}
