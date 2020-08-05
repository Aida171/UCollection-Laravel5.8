<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobil';

    protected $fillable = [
    	'id_mobil',
    	'nama_mobil',
    	'harga',
    	'tahun',
    	'id_produsen',
    	'foto'

    ];

    //Accessor
    public function getNamaMobilAttribute($nama_mobil){
 	    return ucwords($nama_mobil);
 	}


    //Mutator
 	public function setNamaMobilAttribute($nama_mobil){
 	    $this->attributes['nama_mobil'] = strtolower($nama_mobil);
 	}

    //Relasi Tabel Mobil <-> Tabel Produsen
    public function produsen() {
        return $this->belongsTo('App\Produsen', 'id_produsen');
    }

}
