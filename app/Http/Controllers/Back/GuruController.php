<?php

namespace App\Http\Controllers\Back;

use App\Models\Guru;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\GuruRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.guru.guru', [
            'guru' => Guru::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Guru $guru)
    {
        return view('back.guru.guru-form', [
            'guru' => $guru,
            'name' => 'Tambah Guru',
            'title' => 'Tambah Guru',
            'method' => 'post',
            'route' => route('guru.store')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuruRequest $request)
    {
        $data = $request->validated();

        if ($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store('guru-images');
        }

        $data['user_id'] = auth()->user()->id;

        Guru::create($data);

        return to_route('guru.index')->with('success', 'Guru Berhasil Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guru $guru)
    {
        return view('back.guru.guru-show', [
            'guru' => $guru
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guru $guru)
    {
        return view('back.guru.guru-form', [
            'guru' => $guru,
            'name' => 'Edit Guru',
            'title' => 'Edit Guru : ' . $guru->nama,
            'method' => 'put',
            'route' => route('guru.update', $guru->slug)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GuruRequest $request, string $id)
    {
        $data = $request->validated();

        if ($request->hasFile('foto')) {
            Storage::delete($request->input('oldImage', ''));
            $data['foto'] = $request->file('foto')->store('guru-images', 'public');
        }

        $data['user_id'] = auth()->user()->id;

        Guru::where('slug', $id)->update($data);

        return to_route('guru.index')->with('success', 'Guru Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = Guru::find($id);

        if ($guru->foto) {
            Storage::delete($guru->foto);
        }

        Guru::destroy($guru->id);
        return to_route('guru.index')->with('success', 'Guru Berhasil Di Hapus!');
    }
}
