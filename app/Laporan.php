<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
  protected $fillable = [
	'id', 'detail', 'kendala', 'dokumen', 'agendas_id'
	];
	public $timestamps = false;

  public function agendas()
  {
    return $this->belongsTo('App\Agenda');
  }

}
