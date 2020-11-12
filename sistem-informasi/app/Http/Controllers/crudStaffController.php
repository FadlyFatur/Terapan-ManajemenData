<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crudStaffController extends Controller
{
    public function tambah(Request $request)
    {
        $staff = new staff();
        $staff->nama = $request->nama;
        $staff->no_hp = $request->no_hp;
        $warga->alamat = $request->alamat;
    }
}
