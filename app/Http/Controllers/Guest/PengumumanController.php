<?php

namespace App\Http\Controllers\Guest;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::with('user')
                        ->latest()
                        ->paginate(6);
        return view('guest.pengumuman.pengumuman', compact('pengumuman'));
    }
}
