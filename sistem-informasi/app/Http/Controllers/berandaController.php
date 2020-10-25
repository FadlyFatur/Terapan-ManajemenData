<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\beranda;

class berandaController extends Controller
{
    public function Index()
    {
        $data = beranda::all()->first();
        return view('manajemen.editBeranda',compact('data'));
    }

    public function update(Request $request)
    {   
        $request->validate([
            'kontak'=>'required',
            'alamat'=>'required',
            'email'=>'required'
        ]);

        $data = beranda::first();
        $data->kontak = $request->kontak;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->update();

        return redirect()->back();
    }

    public function updateGambar()
    {
        # code...
    }
}
