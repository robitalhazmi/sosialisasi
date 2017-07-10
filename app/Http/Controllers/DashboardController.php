<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReportRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Agenda;
use App\Petugas;
use App\Sosialisasi;
use App\Laporan;


class DashboardController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function dashboard()
  {
    if (Auth::user()->email ==  'robitalhazmi@gmail.com') {
      return view('adminPanel');
    }
    else {
      $sosialisasi  = Sosialisasi::join('agendas', 'sosialisasis.agendas_id', '=', 'agendas.id')
                                 ->join('petugas', 'sosialisasis.petugas_id', '=', 'petugas.id')
                                 ->select('*')
                                 ->get();

      return view('dashboard', compact('sosialisasi'));
    }
  }

  public function map()
  {
    return view('map');
  }

  public function profile()
  {
    if (Auth::user()->email ==  'robitalhazmi@gmail.com') {
      return redirect('logout');
    }
    else {
      $data_profile  = Petugas::where('id', Auth::User()->id)->first();

      $profile['nama']  = $data_profile->nama;
      $profile['telepon']  = $data_profile->telepon;
      $profile['tgl_lahir']  = $data_profile->tgl_lahir;
      $profile['gender']  = $data_profile->gender;

      return view('profile', compact('profile'));
    }
  }

  public function agenda()
  {
    if (Auth::user()->email !=  'robitalhazmi@gmail.com') {
      return redirect('logout');
    }
    else {
      $agenda  = Agenda::get();
      $petugas  = Petugas::where('id', '!=', 1)->get();

      $sosialisasi  = Sosialisasi::join('petugas', 'sosialisasis.petugas_id', '=', 'petugas.id')
                                 ->select('petugas.nama', 'sosialisasis.agendas_id', 'sosialisasis.jabatan')
                                 ->get();

      return view('agenda', compact('agenda', 'sosialisasi', 'petugas'));
    }
  }

  public function postAgenda(Request $req)
  {
    $insertAgenda = new Agenda;

    $insertAgenda->tanggal = $req->date;
    $insertAgenda->kegiatan  = $req->activity;
    $insertAgenda->lokasi  = $req->location;
    $insertAgenda->kontak = $req->phone;

    $insertAgenda->save();
    //belum menampilkan pesan berhasil disimpan
    return redirect('agenda');
  }

  public function postProfile(Request $req)
  {
    $update = Petugas::where('id', Auth::User()->id)->first();

    $update->nama = $req->name;
    $update->telepon  = $req->phone;
    $update->gender = $req->gender;
    $update->tgl_lahir = $req->born;

    $update->save();

    return redirect('profile');
  }

  public function postPetugas(Request $req)
  {
    $insert = new Sosialisasi;

    $insert->agendas_id = $req->agendas_id;
    $insert->petugas_id = $req->petugas_id;
    $insert->jabatan = $req->jabatan;

    $insert->save();

    return redirect('agenda');
  }

  public function postLaporan(Request $req)
  {
    foreach ($req->laporans as $laporan) {
      $filename = $laporan->store('laporan');
      Laporan::create([
        'detail' => $laporan->detail,
        'kendala' =>  $laporan->kendala,
        'dokumen' => $filename,
        'agendas_id'  =>  $laporan->agendas_id
      ]);
    }
    return redirect('dashboard');
  }
}
