<?php

namespace App\Http\Controllers\Guest;

use App\Models\GaleryFoto;
use App\Models\GaleryVideo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GaleryController extends Controller
{
    public function foto()
    {
        $foto = GaleryFoto::with('user')->latest()->paginate(6);
        return view('guest.galery.galery-foto', compact('foto'));
    }

    public function show($slug)
    {
        $foto = GaleryFoto::with('user')->where('slug', $slug)->firstOrFail();
        return view('guest.galery.galery-show', compact('foto'));
    }

    public function video()
    {
        $video = GaleryVideo::with('user')->latest()->paginate(6);
        return view('guest.galery.galery-video', compact('video'));
    }
}
