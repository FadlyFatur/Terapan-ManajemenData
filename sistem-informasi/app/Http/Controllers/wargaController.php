<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\warga;
class wargaController extends Controller
{
    public function Index ()
    {
        $cariwarga = warga::all()->sortByDesc('created_at');
        return view('pencarian.cariWarga',compact('cariwarga'));
    }
}
