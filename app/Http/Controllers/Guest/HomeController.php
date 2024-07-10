<?php

namespace App\Http\Controllers\Guest;

use App\Models\Guru;
use App\Models\Agenda;
use App\Models\Kegiatan;
use App\Models\Pengaturan;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pengaturan = Pengaturan::first();
        $kegiatan = Kegiatan::select('title', 'user_id', 'slug', 'excerpt', 'image', 'created_at')->with('user')->latest()->take(6)->get();
        $pengumuman = Pengumuman::select('title', 'user_id')->with('user')->latest()->take(3)->get();
        $guru = Guru::select('nama', 'image', 'jabatan')->get();
        $agenda = Agenda::latest()->take(4)->get();
        return view('guest.home', [
            'nama_web' => $pengaturan->nama_web,
            'banner' => $pengaturan->banner,
            'kegiatan' => $kegiatan,
            'pengumuman' => $pengumuman,
            'guru' => $guru,
            'agenda' => $agenda
        ]);
    }
}
