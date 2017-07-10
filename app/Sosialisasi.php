<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sosialisasi extends Model
{
  protected $fillable = [
	'id', 'petugas_id', 'agendas_id', 'jabatan',
	];
	public $timestamps = false;

  public function petugas()
  {
    return $this->belongsTo('App\Petugas');
  }

  public function agendas()
  {
    return $this->belongsTo('App\Agenda');
  }
}
