<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\MatakuliahController;
use \App\Http\Controllers\AbsensiController;
use \App\Http\Controllers\DosenController;
use \App\Http\Controllers\JadwalController;
use \App\Http\Controllers\KelasController;
use \App\Http\Controllers\MahasiswaController;



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
    return view('jadwal');
});

Route::get('/absensi',function(){
    return view('absensi');
});

Route::get('/matakuliah',[MatakuliahController::class,'index'])
->name('matakuliah.simpan');

Route::get('/matakuliah/tampil/{id}',[MatakuliahController::class,'tampil'])
->name('matakuliah.tampil');


Route::get('/jadwal',function(){
    return view('jadwal');
});

Route::get('/dosen',[DosenController::class,'index'])
->name('dosen.simpan');

Route::get('/matakuliah/tampil/{nidn}',[DosenController::class,'tampil'])
->name('dosen.tampil');

Route::get('/kelas',function(){
    return view('kelas');
});

Route::get('/mahasiswa',function(){
    return view('mahasiswa');
});