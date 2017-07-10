<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
  protected $fillable = [
	'id', 'nama', 'telepon', 'gender', 'tgl_lahir', 'berkas', 'users_id', 'jabatans_id'
	];
	public $timestamps = false;

  public function sosialisasis()
  {
    return $this->hasMany('App\Sosialisasi');
  }

}
