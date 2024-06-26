<?php

namespace App\Http\Controllers\Back;

use App\Models\Fasilitas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FasilitasRequest;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.fasilitas.fasilitas', [
            'fasilitas' => Fasilitas::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Fasilitas $fasilitas)
    {
        return view('back.fasilitas.fasilitas-form', [
            'fasilitas' => $fasilitas,
            'name' => 'Tambah Fasilitas',
            'title' => 'Tambah Fasilitas',
            'method' => 'post',
            'route' => route('fasilitas.store')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FasilitasRequest $request)
    {
        $data = $request->validated();

        if ($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store('fasilitas-images');
        }

        $data['user_id'] = auth()->user()->id;

        Fasilitas::create($data);

        return to_route('fasilitas.index')->with('success', 'Fasilitas Berhasil Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fasilitas $fasilitas)
    {
        return view('back.fasilitas.fasilitas-show', [
            'fasilitas' => $fasilitas,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fasilitas $fasilitas)
    {
        return view('back.fasilitas.fasilitas-form', [
            'fasilitas' => $fasilitas,
            'name'      => 'Edit Fasilitas',
            'title'     => 'Edit Fasilitas : ' . $fasilitas->nama,
            'method'    => 'put',
            'route'     => route('fasilitas.update', $fasilitas->slug)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FasilitasRequest $request, string $id)
    {
        $data = $request->validated();

        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $data['foto'] = $request->file('foto')->store('fasilitas-images');
        }

        $data['user_id'] = auth()->user()->id;

        Fasilitas::where('slug', $id)->update($data);

        return to_route('fasilitas.index')->with('success', 'Fasilitas Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fasilitas = Fasilitas::find($id);

        if ($fasilitas->foto) {
            Storage::delete($fasilitas->foto);
        }

        Fasilitas::destroy($fasilitas->id);
        return to_route('fasilitas.index')->with('success', 'Fasilitas Berhasil Di Hapus!');
    }

}
