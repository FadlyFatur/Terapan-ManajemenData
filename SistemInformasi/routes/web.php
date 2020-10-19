<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('beranda');


Route::get('pencarian/warga', function (){
   return view('pencarian/cariWarga'); 
})->name('cariWarga');

Route::get('manajemen/data-warga', function (){
   return view('manajemen/crudWarga'); 
})->name('crudWarga');

Route::get('manajemen/beranda', function (){
    return view('manajemen/editBeranda'); 
})->name('editBeranda');

Route::get('manajemen/kegiatan', function (){
    return view('manajemen/editAcara'); 
})->name('editAcara');

Route::get('manajemen/staff', function (){
    return view('manajemen/editStaff'); 
})->name('staff');

Route::get('profil/edit', function (){
    return view('profil/editProfil'); 
})->name('profil');
 
Route::get('password-reset', function (){
    return view('profil/resetPass'); 
})->name('reset');  

Route::get('login', function (){
    return view('akun/login'); 
})->name('login');
 
Route::get('daftar', function (){
    return view('akun/register'); 
})->name('daftar');  