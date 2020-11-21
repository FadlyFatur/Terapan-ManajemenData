<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\rt;

class warga extends Model
{
    protected $fillable = [
      'nik', 'nama_lengkap', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'alamat','kelurahan','kecamatan','kota',
    ];

    public function agama(){
      return $this->belongsTo('\App\agama', 'agama_id', 'id');
    }

    public function tabelRT(){
      return $this->belongsTo('\App\rt', 'rt_id', 'id');
    }

    public function tabelKerja(){
      return $this->belongsTo('\App\kerja', 'kerja_id', 'id');
    }

    public function tabelKawin(){
      return $this->belongsTo('\App\kawin', 'perkawinan_id', 'id');
    }
}
