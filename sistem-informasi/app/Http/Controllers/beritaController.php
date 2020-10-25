<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kegiatan;

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

    public function post(){
        return view ('manajemen.editAcara');
    }

    public function show($slug){
        $data = kegiatan::where('slug', $slug)->firstOrFail();

        return view ('berita.berita',compact('data'));
    }
}
