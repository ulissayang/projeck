<?php

namespace App\Http\Controllers\Back;

use App\Models\Pengumuman;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PengumumanRequest;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengumuman = Pengumuman::where('user_id', Auth::id())->latest()->get();

        return view('back.pengumuman.pengumuman', compact('pengumuman'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Pengumuman $pengumuman)
    {
        return view('back.pengumuman.pengumuman-form', [
            'pengumuman' => $pengumuman,
            'name' => 'Tambah Pengumuman',
            'title' => 'Tambah Pengumuman',
            'method' => 'post',
            'route' => route('pengumuman.store')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PengumumanRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->user()->id;
        Pengumuman::create($data);

        return to_route('pengumuman.index')->with('success', 'Pengumuman Berhasil Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengumuman $pengumuman)
    {
        return view('back.pengumuman.pengumuman-show', [
            'pengumuman' => $pengumuman
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengumuman $pengumuman)
    {
        return view('back.pengumuman.pengumuman-form', [
            'pengumuman' => $pengumuman,
            'name' => 'Edit Pengumuman',
            'title' => 'Edit Pengumuman : ' . $pengumuman->title,
            'method' => 'put',
            'route' => route('pengumuman.update', $pengumuman->slug)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PengumumanRequest $request, string $id)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->user()->id;

        Pengumuman::where('slug', $id)->update($data);

        return to_route('pengumuman.index')->with('success', 'Pengumuman Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengumuman = Pengumuman::find($id);

        Pengumuman::destroy($pengumuman->id);
        return to_route('pengumuman.index')->with('success', 'Pengumuman Berhasil Di Hapus!');
    }
}
