<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\warga;
use Illuminate\Support\Facades\Redirect;

class crudWargaController extends Controller
{
    public function tambah(Request $request)
    {
        $warga = new warga();
        $warga->nik = $request->nik;
        $warga->nama_lengkap = $request->nama_lengkap;
        $warga->jenis_kelamin = $request->jenis_kelamin;
        $warga->tempat_lahir = $request->tempat_lahir;
        $warga->tanggal_lahir = $request->tanggal_lahir;
        $warga->alamat = $request->alamat;
        $warga->kelurahan = $request->kelurahan;
        $warga->kecamatan = $request->kecamatan;
        $warga->kota = $request->kota;
        $warga->rt = $request->rt;
        $warga->agama_id = $request->agama;
        $warga->kerja = $request->kerja;
        $warga->perkawinan = $request->perkawinan;
        $warga->save();

        return Redirect::back();

    }

    public function index()
    {
        $wargas = warga::all()->sortByDesc('rt');
        return view('manajemen.crudWarga',compact('wargas'))->with('no', 1);

    }

    public function delete($id)
    {
        $warga = warga::find($id);
        $warga->delete();
        return Redirect::back(); 
    }

    public function update(Request $request, $id)
    {
        $warga = Warga::find($id);
        // dd($request->all());
        if ($request->status == "Aktif"){
            $status = 1;
        }else{
            $status = 0;
        }

        $warga->nik = $request->nik;
        $warga->nama_lengkap = $request->nama_lengkap;
        $warga->jenis_kelamin = $request->jenis_kelamin;
        $warga->tempat_lahir = $request->tempat_lahir;
        $warga->tanggal_lahir = $request->tanggal_lahir;
        $warga->alamat = $request->alamat;
        $warga->kelurahan = $request->kelurahan;
        $warga->kecamatan = $request->kecamatan;
        $warga->kota = $request->kota;
        $warga->status = $status;
        $warga->rt = $request->rt;
        $warga->agama_id = $request->agama;
        $warga->kerja = $request->kerja;
        $warga->perkawinan = $request->kawin;

        $warga->update();

        return Redirect::back();
    }
}
