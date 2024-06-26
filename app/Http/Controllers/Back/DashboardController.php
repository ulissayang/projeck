<?php

namespace App\Http\Controllers\Back;

use App\Models\Agenda;
use App\Models\Prestasi;
use App\Models\Kegiatan;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $kegiatan = Kegiatan::select('title', 'description', 'slug', 'image')
            ->where('user_id', auth()->user()->id)
            ->where('date_time', '>', Carbon::now())
            ->latest()
            ->take(4)
            ->get();

        $agenda = Agenda::select('title', 'location', 'slug', 'date_time')
            ->where('user_id', auth()->user()->id)
            ->where('date_time', '>', Carbon::now())
            ->latest()
            ->take(4)
            ->get();

        return view('back.dashboard', compact('kegiatan', 'agenda'));
    }
}
