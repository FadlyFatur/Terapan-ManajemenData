<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\staff;
use Illuminate\Support\Facades\Redirect;

class crudStaffController extends Controller
{
    public function tambah(Request $request)
    {
        $staff = new staff();
        $staff->nama = $request->nama;
        $staff->no_hp = $request->no_hp;
        $staff->alamat = $request->alamat;
        $staff->save();

        return Redirect::back();
    }
}
