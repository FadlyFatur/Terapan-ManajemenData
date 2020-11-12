<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\warga;

class crudWargaController extends Controller
{
    public function tambah(Request $request)
    {
        $warga = new warga();
        $warga->nik = $request->nik;
        $warga->nama_lengkap = $request->nama_lengkap;
        $warga->jenis_kelamin = $request->jenis_kelamin;
        $warga->tempat_lahir = $request->tempat_lahir;
        $warga->alamat = $request->alamat;
        $warga->kelurahan = $request->kelurahan;
        $warga->kecamatan = $request->kecamatan;
        $warga->kota = $request->kota;
        $warga->status = $request->status;
        $warga->save();

        return $warga;

    }
}
