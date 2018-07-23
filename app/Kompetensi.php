<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kompetensi extends Model
{
    protected $table = 'kompetensi';
    protected $primaryKey = 'id_kompetensi';

  	protected $fillable = ['id_kompetensi','nama_kompetensi'];

  	public function kompetensi_jabatan(){
    	return $this->belongsTo('App\KompetensiJabatan');
    }

  	public function kompetensi_departemen(){
    	return $this->belongsTo('App\KompetensiDepartemen');
    }
}
