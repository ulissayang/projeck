<?php

namespace App\Http\Controllers\Guest;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::select('nama', 'image', 'jabatan')->get();
        return view('guest.guru.data-guru', [
            'guru' => $guru,
        ]);
    }
}
