<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produsen extends Model
{
    protected $table = 'produsen';

    protected $fillable = [
    	'nama_produsen',
    	'keterangan'
    ];

    //relasi Tabel Produsen <-> Tabel Mobil
    public function mobil() {
    	return $this->hasMany('App\Mobil', 'id_produsen');
    }

}
