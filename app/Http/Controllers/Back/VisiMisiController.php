<?php

namespace App\Http\Controllers\Back;

use App\Models\VisiMisi;
use App\Http\Controllers\Controller;
use App\Http\Requests\VisiMisiRequest;
use Illuminate\Support\Facades\DB;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breadcrumbs = [
            ['name' => 'Informasi'],
            ['name' => 'Visi Misi'],
        ];

        $visiMisi = auth()->user()->visi_misi()->latest()->get();

        return view('back.visi-misi.visi-misi', [
            'title' => 'Tabel Visi Misi',
            'breadcrumbs' => $breadcrumbs,
            'visi_misi' => $visiMisi,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VisiMisiRequest $request)
    {

        try {
            $data = $request->validated();
            $visiMisi = $request->user()->visi_misi()->create($data);

            return response()->json([
                'message' => 'Data Berhasil Ditambahkan!',
                'data' => $visiMisi
            ]);
        } catch (\Exception $e) {

            return response()->json([
                'error' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        try {
            $visiMisi = VisiMisi::where('slug', $slug)->firstOrFail();
            return response()->json(['data' => $visiMisi]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Data tidak ditemukan'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VisiMisiRequest $request, string $slug)
    {

        try {
            $data = $request->validated();
            $visiMisi = VisiMisi::where('slug', $slug)->firstOrFail();
            $visiMisi->update($data);

            return response()->json([
                'message' => 'Data Berhasil Diupdate!',
                'data' => $visiMisi
            ]);
        } catch (\Exception $e) {

            return response()->json([
                'error' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {

        try {
            $visiMisi = VisiMisi::where('slug', $slug)->firstOrFail();
            $visiMisi->delete();

            return response()->json([
                'message' => 'Data Berhasil Dihapus!'
            ]);
        } catch (\Exception $e) {

            return response()->json([
                'error' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }
}
