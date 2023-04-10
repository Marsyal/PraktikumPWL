<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/daftar_mahasiswa','App\Http\Controllers\MahasiswaController@index');

Route::get('/daftar_mahasiswa', [MahasiswaController::class,'index']);

// Route::post('detail_mahasiswa',[MahasiswaController::class, 'detail_mhs']);

Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
 
Route::get('/admin/dashboard',[AdminController::class,'index']);
Route::get('/admin/postingan',[AdminController::class,'show_postingan']);
Route::get('/admin/arsip',[AdminController::class,'show_arsip']);
Route::get('/admin/update',[AdminController::class,'show_update']);
Route::get('/admin/community',[AdminController::class,'show_community']);
Route::get('/admin/help',[AdminController::class,'show_help']);
