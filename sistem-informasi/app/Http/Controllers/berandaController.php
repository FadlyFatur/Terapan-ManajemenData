<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\beranda;

class berandaController extends Controller
{
    public function Index()
    {
        $data = beranda::first();
        return view('manajemen.editBeranda',compact('data'));
    }

    public function update(Request $request)
    {   
        // $request->validate([
        //     'kontak'=>'required',
        //     'alamat'=>'required',
        //     'email'=>'required'
        // ]);

        $data = beranda::all();
        if($data->count() > 0){
        $data = beranda::first();
        $data->kontak = $request->kontak;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->update();
        }else{
        $data = new beranda();
        $data->kontak = $request->kontak;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->status = 1;
        $data->save();
        }

        return view('manajemen.editBeranda');
    }

    public function updateGambar()
    {
        # code...
    }
}
