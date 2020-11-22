<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    protected $fillable = [
        'nama_jabatan'
    ];

    // public function user()
    // {
    //     return $this->belongToMany('App\staff');
    // }
    
}
