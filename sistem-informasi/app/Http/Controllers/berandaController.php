<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\beranda;
// use Illuminate\Support\Facades\Input;

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

    public function storeGambar(Request $request)
    {



        // if ($request->hasFile('image')){
        //     if ($request->file('image')->isValid()) {
        //         $validate = Validator::make($request->all(),[
        //             'image' => 'required|mimes:jpeg,png|max:5120',
        //             ]);
        //             if ($validate->fails()) {
        //                 return redirect()->back()
        //                             ->withErrors($validate)
        //                             ->withInput();
        //                 }
        var_dump($request->input('gambar1'));   

    //                 if ($request->input-<)
    //             //upload file ke local storage
    //             $nama = $request->input
    //             $nama = $request->image->getClientOriginalName();
    //             $url = $request->image->storeAs('/image', $nama);


    //             // upload db
    //             $store = kegiatan::create([
    //                 'slug' => Str::slug($request->input('judul')),
    //                 'judul' => $request->input('judul'),
    //                 'deskripsi' => $request->input('deskripsi'),
    //                 'foto_kegiatan' => $url ,
    //                 'status' => 1,
    //                 ]);
    //             return \Redirect::back()->with(['sukses' => 'Pesan Berhasil']);
    //         }
    //     }
    //     abort(500, 'Gagal upload!');
    }
}
