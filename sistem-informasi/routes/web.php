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

Route::get('/', 'HomeController@Index')->name('beranda');

Route::get('pencarian/warga', function (){
   return view('pencarian/cariWarga'); 
})->name('cariWarga');

Route::get('manajemen/data-warga', function (){
   return view('manajemen/crudWarga'); 
})->name('crudWarga');

// route beranda
Route::get('manajemen/Edit-beranda', 'berandaController@Index')->name('editBeranda');
Route::post('manajemen/Edit-beranda/Post', 'berandaController@update')->name('updateBeranda');
Route::post('manajemen/Edit-beranda/UploadGambar', 'berandaController@storeGambar')->name('uploadGambar');

//route acara/kegiatan
Route::get('manajemen/kegiatan', 'beritaController@adminIndex')->name('editAcara');
Route::get('Berita-acara', 'beritaController@Index')->name('Acara');
Route::get('berita/{slug}', 'beritaController@show')->name('showAcara');
Route::post('manajemen/kegiatan/submit-kegiatan', 'beritaController@post')->name('postAcara');


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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
