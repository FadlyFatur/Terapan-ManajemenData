<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
  protected $fillable = [
    'slug', 'judul', 'tgl', 'deskripsi', 'foto_kegiatan', 'status',
];

}
