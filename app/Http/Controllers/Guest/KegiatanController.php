<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::select('title', 'user_id', 'excerpt', 'image', 'location', 'created_at', 'slug')
            ->with('user')
            ->latest()
            ->paginate(6);
        return view('guest.kegiatan.kegiatan', compact('kegiatan'));
    }

    public function show($slug)
    {
        $kegiatan = Kegiatan::where('slug', $slug)->firstOrFail();
        return view('guest.kegiatan.kegiatan-show', compact('kegiatan'));
    }
}
