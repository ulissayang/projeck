<?php

namespace App\Http\Controllers\Back;

use App\Models\GaleryVideo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\GaleryVideoRequest;

class GaleryVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.galery-video.galery-video', [
            'galery_video' => GaleryVideo::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(GaleryVideo $galery_video)
    {
        return view('back.galery-video.galery-video-form', [
            'galery_video'  => $galery_video,
            'name'          => 'Tambah Galery Video',
            'title'         => 'Tambah Galery Video',
            'method'        => 'post',
            'route'        => route('galery-video.store'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GaleryVideoRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->user()->id;

        GaleryVideo::create($data);

        return to_route('galery-video.index')->with('success', 'Data Berhasil Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(GaleryVideo $galery_video)
    {
        return view('back.galery-video.galery-video-show', [
            'galery_video' => $galery_video
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GaleryVideo $galery_video)
    {
        return view('back.galery-video.galery-video-form', [
            'galery_video'  => $galery_video,
            'name'          => 'Edit Galery Video',
            'title'         => 'Edit Galery Video : ' . $galery_video->judul,
            'method'        => 'put',
            'route'        => route('galery-video.update', $galery_video->slug),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GaleryVideoRequest $request, string $id)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->user()->id;

        GaleryVideo::where('slug', $id)->update($data);

        return to_route('galery-video.index')->with('success', 'Data Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galery_video = GaleryVideo::find($id);

        GaleryVideo::destroy($galery_video->id);
        return to_route('galery-video.index')->with('success', 'Data Berhasil Di Hapus!');
    }
}
