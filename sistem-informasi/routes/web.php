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

//route crud warga
Route::get('manajemen/data-warga', 'crudWargaController@index')->name('crudWarga');

Route::post('manajemen/tambahWarga/Post', 'crudWargaController@tambah')->name('tambahWarga');
Route::get('manajemen/crudwarga/delete/{id}', 'crudWargaController@delete')->name('deleteWarga');
Route::post('manajemen/crudwarga/update/{id}', 'crudWargaController@update')->name('updateWarga');
Route::get('manajemen/crudwarga/cari/', 'crudWargaController@cari')->name('cariWarga-edit');


// route beranda
Route::get('manajemen/Edit-beranda', 'berandaController@Index')->name('editBeranda');
Route::post('manajemen/Edit-beranda/Post', 'berandaController@update')->name('updateBeranda');
Route::post('manajemen/Edit-beranda/UploadGambar', 'berandaController@storeGambar')->name('uploadGambar');

//route acara/kegiatan
Route::get('manajemen/kegiatan', 'beritaController@adminIndex')->name('editAcara');
Route::get('berita', 'beritaController@Index')->name('Acara');
Route::get('berita/{slug}', 'beritaController@show')->name('showAcara');
Route::post('manajemen/kegiatan/post-kegiatan', 'beritaController@post')->name('post');
Route::get('manajemen/kegiatan/delete/{id}', 'beritaController@destroy')->name('deleteAcara');
Route::post('manajemen/kegiatan/update/{id}', 'beritaController@update')->name('updateAcara');

Route::get('manajemen/staff', function (){
    return view('manajemen/editStaff'); 
})->name('staff');

Route::post('manajemen/tambahStaff/Post', 'crudStaffController@tambah')->name('tambahStaff');

//editprofil
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
