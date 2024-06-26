<?php

namespace App\Http\Controllers\Back;

use App\Models\VisiMisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\VisiMisiRequest;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.visi-misi.visi-misi', [
            'visi_misi' => VisiMisi::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(VisiMisi $visi_misi)
    {
        return view('back.visi-misi.visi-misi-form', [
            'visi_misi' => $visi_misi,
            'name'      => 'Tambah Visi Misi',
            'title'     => 'Tambah Visi Misi',
            'method'    => 'post',
            'route'     => route('visi-misi.store')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VisiMisiRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->user()->id;

        VisiMisi::create($data);

        return redirect()->route('visi-misi.index')->with('success', 'Data Berhasil Di Tambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VisiMisi $visi_misi)
    {
        return view('back.visi-misi.visi-misi-form', [
            'visi_misi' => $visi_misi,
            'name'      => 'Edit',
            'title'     => 'Edit : ' . $visi_misi->jenis,
            'method'    => 'put',
            'route'     => route('visi-misi.update', $visi_misi->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VisiMisiRequest $request, string $id)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->user()->id;

        VisiMisi::find($id)->update($data);

        return redirect()->route('visi-misi.index')->with('success', 'Data Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $visi_misi = VisiMisi::find($id);

        VisiMisi::destroy($visi_misi->id);
        return redirect()->route('visi-misi.index')->with('success', 'Data Berhasil Di Hapus!');
    }
}
