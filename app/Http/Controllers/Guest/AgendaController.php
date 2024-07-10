<?php

namespace App\Http\Controllers\Guest;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Agenda::with('user')
                        ->latest()
                        ->paginate(6);
        return view('guest.agenda.agenda', compact('agenda'));
    }
}
