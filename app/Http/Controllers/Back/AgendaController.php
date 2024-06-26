<?php

namespace App\Http\Controllers\Back;

use Exception;
use App\Models\Agenda;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\DataTables\AgendaDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\AgendaRequest;
use Illuminate\Support\Facades\Storage;


class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(AgendaDataTable $dataTable)
    {
        try {
            return $dataTable->render('back.agenda.agenda');
        } catch (Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create(Agenda $agenda)
    // {
    //     try {
    //         return view('back.agenda.agenda-form', [
    //             'agenda' => $agenda,
    //             'name' => 'Tambah Agenda',
    //             'title' => 'Tambah Agenda',
    //             'method' => 'post',
    //             'route' => route('agenda.store')
    //         ]);
    //     } catch (Exception $e) {
    //         return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AgendaRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();

            if ($request->file('image')) {
                $data['image'] = $request->file('image')->store('agenda-images');
            }

            $data['excerpt'] = Str::limit(strip_tags($request->description), 150);

            $request->user()->agenda()->create($data);

            return response()->json(['message' => 'Data Berhasil Di Tambahkan']);
        } catch (Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show(Agenda $agenda)
    {
        try {
            return view('back.agenda.agenda-show', compact('agenda'));
        } catch (Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $slug): JsonResponse
    {
        try {
            $agenda = Agenda::where('slug', $slug)->first();
            return response()->json(['data' => $agenda]);
        } catch (Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AgendaRequest $request, string $slug)
    {
        try {
            $data = $request->validated();

            $data['excerpt'] = Str::limit($request->description, 150);

            Agenda::where('slug', $slug)->firstOrFail()->update($data);

            return response()->json(['message' => 'Data Berhasil Di Ubah']);
        } catch (Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agenda $agenda)
    {
        try {
            $agenda->delete();
            return response()->json(['message' => 'Data Berhasil Di Hapus']);
        } catch (Exception $e) {
            // Tangkap pengecualian dan kirim pesan error
            return response()->json(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }


    public function bulkDelete(Request $request): JsonResponse
    {
        try {

            $agendaIds = $request->input('ids');
            $agendas = Agenda::whereIn('slug', $agendaIds)->get();

            foreach ($agendas as $agenda) {
                if ($agenda->image) {
                    Storage::delete($agenda->image);
                }
            }

            $deleted = Agenda::whereIn('slug', $agendaIds)->delete();

            if ($deleted) {
                return response()->json(['success' => true, 'message' => 'Data berhasil dihapus.', 'icon' => 'success']);
            } else {
                return response()->json(['error' => 'Gagal menghapus data.']);
            }
        } catch (Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }
}
