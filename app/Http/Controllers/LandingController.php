<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use App\Sosialisasi;

class LandingController extends Controller
{
  public function landingPage()
  {
    $agenda  = Agenda::get();

    $sosialisasi  = Sosialisasi::join('petugas', 'sosialisasis.petugas_id', '=', 'petugas.id')
                               ->select('petugas.nama', 'sosialisasis.agendas_id', 'sosialisasis.jabatan')
                               ->get();

    return view('home', compact('agenda', 'sosialisasi'));
  }
}
