<?php

namespace App\Http\Controllers\Back;

use App\Models\Prestasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PrestasiRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.prestasi.prestasi', [
            'prestasi' => Prestasi::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Prestasi $prestasi)
    {
        return view('back.prestasi.prestasi-form', [
            'prestasi' => $prestasi,
            'name'     => 'Tambah Prestasi',
            'title'    => 'Tambah Prestasi',
            'method'   => 'post',
            'route'    => route('prestasi.store'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PrestasiRequest $request)
    {
        $data = $request->validated();

        if ($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store('prestasi-images');
        }

        $data['user_id'] = auth()->user()->id;

        Prestasi::create($data);

        return to_route('prestasi.index')->with('success', 'Prestasi Berhasil Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prestasi $prestasi)
    {
        return view('back.prestasi.prestasi-show', [
            'prestasi' => $prestasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestasi $prestasi)
    {
        return view('back.prestasi.prestasi-form', [
            'prestasi' => $prestasi,
            'name'     => 'Edit Prestasi',
            'title'    => 'Edit Prestasi : ' . $prestasi->nama,
            'method'   => 'put',
            'route'    => route('prestasi.update', $prestasi->slug),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PrestasiRequest $request, string $id)
    {
        $data = $request->validated();

        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $data['foto'] = $request->file('foto')->store('prestasi-images');
        }

        $data['user_id'] = auth()->user()->id;


        Prestasi::where('slug', $id)->update($data);

        return to_route('prestasi.index')->with('success', 'Prestasi Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prestasi = Prestasi::find($id);

        if ($prestasi->foto) {
            Storage::delete($prestasi->foto);
        }

        Prestasi::destroy($prestasi->id);
        return to_route('prestasi.index')->with('success', 'Prestasi Berhasil Di Hapus!');
    }
}
