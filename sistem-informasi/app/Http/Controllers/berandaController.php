<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\beranda;
use Illuminate\Support\Facades\Redirect;

class berandaController extends Controller
{
    public function Index()
    {
        $data = beranda::first();
        return view('manajemen.editBeranda',compact('data'));
    }

    public function update(Request $request)
    {   
        $data = beranda::all();
        if($data->count() > 0){
            try {
                $data = beranda::first();
                $data->kontak = $request->kontak;
                $data->email = $request->email;
                $data->alamat = $request->alamat;
                $data->update();
                return Redirect::back()->with(['sukses' => 'Berhasil merubah data']);
            } catch (Exception $e) {
                return Redirect::back()->with(['gagal' => 'Gagal menambah acara']);
            }
        
        }else {
            try {
                $data = new beranda();
                $data->kontak = $request->kontak;
                $data->email = $request->email;
                $data->alamat = $request->alamat;
                $data->status = 1;
                $data->save();
                return Redirect::back()->with(['sukses' => 'Berhasil merubah data']);
            } catch (\Throwable $th) {
                return Redirect::back()->with(['gagal' => 'Gagal menambah acara']);
            }
        }
    }

    public function storeGambar(Request $request)
    {
        $data = beranda::first();

        if ($request->hasFile('gambar')) {
            if ($request->gambar->isValid()) {
                $validator = Validator::make($request->all(), [
                    'gambar' => 'required|mimes:jpeg,png|max:5120',
                ]);
            
            if ($validator->fails()) {
                return Redirect::back()
                            ->withErrors($validator)
                            ->withInput();
            }

            $name = date("Ymd_"). $request->gambar->getClientOriginalName();
            $url = $request->gambar->storeAs('public', $name);
            
            $data->foto = $name;
            $data->url = $url;
            $data->update();
            return Redirect::back()->with(['sukses-update' => 'Data berhasil diupdate!']);
            }
        }
        return Redirect::back()->with(['gagal-update' => 'Data berhasil diupdate!']);

    }
}
