<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\warga;
use App\kerja;

class wargaController extends Controller
{
    public function Index ()
    {
        return view('pencarian/cariWarga');
    }

    public function fetch(Request $request){
        if($request->input('query')){
            $data['cariwarga'] = warga::
            where('nik', 'like', '%'. $request->input('query').'%')
            ->orWhere('nama_lengkap', 'like', '%'. $request->input('query').'%')
            ->orWhere('jenis_kelamin', 'like', '%'. $request->input('query').'%')
            ->orWhere('tempat_lahir', 'like', '%'. $request->input('query').'%')
            ->orWhere('tanggal_lahir', 'like', '%'. $request->input('query').'%')
            ->orWhere('alamat', 'like', '%'. $request->input('query').'%')
            ->orWhere('kelurahan', 'like', '%'. $request->input('query').'%')
            ->orWhere('kecamatan', 'like', '%'. $request->input('query').'%')
            ->orWhere('kota', 'like', '%'. $request->input('query').'%')
            ->orWhere('rw', 'like', '%'. $request->input('query').'%')
            ->orWhere('perkawinan', 'like', '%'. $request->input('query').'%')
            ->orWhereHas('agama', function($query) use ($request){
                $query->where('nama_agama', 'like', '%'. $request->input('query').'%');
            })
            ->orWhereHas('tabelRT', function($query) use ($request){
                $query->where('nama_rt', 'like', '%'. $request->input('query').'%');
            })
            ->orWhereHas('tabelKerja', function($query) use ($request){
                $query->where('kerja', 'like', '%'. $request->input('query').'%');
            })
            
            ->orderBy('created_at', 'desc')->get();
        } else {
            $data['cariwarga'] = warga::all()->sortByDesc('created_at');
        }
        return view('pencarian/fetchWarga', $data);
    }
}
