<?php

namespace App\Http\Controllers\Back;

use App\Models\GaleryFoto;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\GaleryFotoRequest;

class GaleryFotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.galery-foto.galery-foto', [
            'galery_foto' => GaleryFoto::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(GaleryFoto $galery_foto)
    {
        return view('back.galery-foto.galery-form', [
            'galery_foto'   => $galery_foto,
            'name'          => 'Tambah Data',
            'title'         => 'Tambah Data',
            'method'        => 'post',
            'route'         => route('galery-foto.store')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GaleryFotoRequest $request)
    {
        $data = $request->validated();

        if ($request->file('foto')) {
            $data['foto'] = json_encode(
                collect($request->file('foto'))->map(fn ($image) => $image->store('galery-foto-images'))->all()
            );
        }

        $data['user_id'] = auth()->user()->id;

        GaleryFoto::create($data);

        return to_route('galery-foto.index')->with('success', 'Galeri berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(GaleryFoto $galery_foto)
    {
        return view('back.galery-foto.galery-foto-show', [
            'galery_foto'   => $galery_foto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GaleryFoto $galery_foto)
    {
        return view('back.galery-foto.galery-form', [
            'galery_foto'   => $galery_foto,
            'name'          => 'Edit Data',
            'title'         => 'Edit Data : ' . $galery_foto->judul,
            'method'        => 'put',
            'route'         => route('galery-foto.update', $galery_foto->slug)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GaleryFotoRequest $request, string $id)
    {
        $data = $request->validated();

        $oldImages = [];
        if ($request->oldImage && is_string($request->oldImage)) {
            $oldImages = json_decode($request->oldImage, true);
            if (!is_array($oldImages)) {
                $oldImages = [];
            }
        }

        if ($request->hasFile('foto')) {
            // Delete old images
            if (!empty($oldImages)) {
                foreach ($oldImages as $image) {
                    if (Storage::exists($image)) {
                        Storage::delete($image);
                    }
                }
            }

            // Upload new images
            $newImages = [];
            foreach ($request->file('foto') as $image) {
                $newImages[] = $image->store('galery-foto-images');
            }

            // Use only new images
            $data['foto'] = $newImages;
        } else {
            // If no new images are uploaded, retain the old images
            $data['foto'] = $oldImages;
        }
        
        $data['user_id'] = auth()->user()->id;

        GaleryFoto::where('slug', $id)->update($data);

        return to_route('galery-foto.index')->with('success', 'Galeri berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galery_foto = GaleryFoto::find($id);

        if ($galery_foto->foto) {
            $foto = is_string($galery_foto->foto) ? json_decode($galery_foto->foto, true) : $galery_foto->foto;
            if (is_array($foto)) {
                foreach ($foto as $image) {
                    if (Storage::exists($image)) {
                        Storage::delete($image);
                    }
                }
            }
        }

        GaleryFoto::destroy($galery_foto->id);
        return to_route('galery-foto.index')->with('success', 'Data Berhasil Di Hapus!');
    }
}
