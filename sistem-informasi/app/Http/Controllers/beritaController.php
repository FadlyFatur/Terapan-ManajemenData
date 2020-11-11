<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\acara;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class beritaController extends Controller
{   
    // menampilkan berita di halaman berita
    public function Index()
    {
        $data = acara::all()->sortByDesc('created_at');
        return view('berita.listBerita',compact('data'));
        
    }

    // menampilkan list berita di halaman admin 
    public function adminIndex(){
        $data = acara::all();
        return view('manajemen.editAcara', compact('data'))->with('no', 1);
    }

    public function post(Request $request){
        
        if ($request->hasFile('image')){

            if ($request->file('image')->isValid()) {
                
                $validated = $request->validate([
                    'judul' => 'string|max:200',
                    'deskripsi'=> 'string|max:3500',
                    'image' => 'required|mimes:jpeg,png|max:5120',
                ]);

                //upload file ke local storage
                    $name = $request->image->getClientOriginalName();
                    $request->image->storeAs('/public', $name);
                    $url = Storage::url($name);
                
                // upload db
                $store = acara::create([
                    'slug' => Str::slug($request->input('judul')),
                    'judul' => $request->input('judul'),
                    'deskripsi' => $request->input('deskripsi'),
                    'foto_kegiatan' => $url,
                    'status' => 1,
                    ]);
                // Session::flash('success','Upload Berhasil!');
                return \Redirect::back()->with(['sukses' => 'Pesan Berhasil']);
            }
        }
        abort(500, 'Gagal upload!');
        // return view ('manajemen.editAcara');
    }

    public function show($slug){
        $data = acara::where('slug', $slug)->firstOrFail();
        return view ('berita.berita',compact('data'));
    }

    public function destroy($id){
        $data = acara::find($id);
        $filename = $data->url;
        try {
            Storage::delete($filename);
            $data->delete();
            return Redirect::back()->with('sukses-delete','Data berhasil dihapus!');
        } catch (\Exception $e) {
            return Redirect::back()->with('gagal-delete','Data berhasil dihapus!');
        }
    }
}
