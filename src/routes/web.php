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
    return view('mahasiswa');
});

Route::get('/absen',function(){
    return view('absen');
});

Route::get('/matakuliah',function(){
    return view('matakuliah');
});

Route::get('/jadwal',function(){
    return view('jadwal');
});

Route::get('/dosen',function(){
    return view('dosen');
});

Route::get('/kelas',function(){
    return view('kelas');
});

Route::get('/mahasiswa',function(){
    return view('mahasiswa');
});