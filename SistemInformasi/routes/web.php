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

Route::get('pencarian/kartu-keluarga', function (){
    return view('pencarian/cariKK'); 
})->name('cariKK');

 Route::get('manajemen/Kartu-Keluarga', function () {
    return view('manajemen/crudKK');
})->name('crudKK');

Route::get('manajemen/data-warga', function (){
   return view('manajemen/crudKTP'); 
})->name('crudKTP');

Route::get('manajemen/beranda', function (){
    return view('manajemen/editBeranda'); 
})->name('editBeranda');

Route::get('manajemen/staff', function (){
    return view('manajemen/editStaff'); 
})->name('staff');
 
Route::get('manajemen/tambah-data', function (){
    return view('manajemen/tambahData'); 
})->name('tambah');

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