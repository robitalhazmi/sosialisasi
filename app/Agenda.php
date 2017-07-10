<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
  protected $fillable = [
	'id', 'tanggal', 'kegiatan', 'kontak', 'lokasi'
	];
	public $timestamps = false;

  public function sosialisasis()
  {
    return $this->hasMany('App\Sosialisasi');
  }

  public function laporans()
  {
    return $this->hasOne('App\Laporan');
  }
}
