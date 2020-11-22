<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\acara;
use App\beranda;
use App\staff;

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
        $data = acara::all()->sortByDesc('created_at')->take(3);
        $beranda = beranda::all()->first();
        $staff = staff::all()->sortByDesc('nama')->take(4);
        
        return view('welcome',compact('data', 'beranda', 'staff'));
    }

}
