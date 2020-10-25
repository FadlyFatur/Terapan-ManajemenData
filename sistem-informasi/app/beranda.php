<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beranda extends Model
{
  protected $fillable = [
    'kontak', 'email', 'alamat', 'gambar1', 'gambar2', 'gambar3'
  ];

  public $timestamps = false;
}
