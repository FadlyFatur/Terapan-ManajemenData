<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kegiatan;
use App\beranda;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = kegiatan::all()->sortByDesc('created_at')->take(3);
        $beranda = beranda::all()->first();
        
        return view('welcome',compact('data', 'beranda'));
    }

}
