<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kegiatan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class beritaController extends Controller
{   

    public function Index()
    {
        $data = kegiatan::all()->sortByDesc('created_at');

        return view('berita.listBerita',compact('data'));
        
    }

    public function adminIndex(){
        $data = kegiatan::all();
        return view('manajemen.editAcara', compact('data'))->with('no', 1);
        // return view('manajemen.editAcara', ['acara' => $data])->with('no', 1);
    }

    public function post(Request $request){
        
        if ($request->hasFile('image')){

            if ($request->file('image')->isValid()) {

                $validate = Validator::make($request->all(),[
                    'judul' => 'string|max:200',
                    'deskripsi'=> 'string|max:2000',
                    'image' => 'required|mimes:jpeg,png|max:5120',
                    ]);

                    if ($validate->fails()) {
                        return redirect()->back()
                                    ->withErrors($validate)
                                    ->withInput();
                        }
                //upload file ke local storage
                
                $extension = $request->image->extension();
                $nama = $request->image->getClientOriginalName();
                $request->image->storeAs('/public', $nama);
                $url = Storage::url($nama);


                // upload db
                $store = kegiatan::create([
                    'slug' => Str::slug($request->input('judul')),
                    'judul' => $request->input('judul'),
                    'deskripsi' => $request->input('deskripsi'),
                    'foto_kegiatan' => $url ,
                    'status' => 1,
                    ]);
                Session::flash('success','Upload Berhasil!');
                return \Redirect::back();
            }
        }
        abort(500, 'Gagal upload!');
        // return view ('manajemen.editAcara');
    }

    public function show($slug){
        $data = kegiatan::where('slug', $slug)->firstOrFail();

        return view ('berita.berita',compact('data'));
    }
}
