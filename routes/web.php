<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FileController;
use App\Http\Controllers\FileController2;
use App\Http\Controllers\Beranda;
use App\Http\Controllers\Tentang;
use App\Http\Controllers\lokasi;
use App\Http\Controllers\programstudi;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-world', function () {
    return '<h1>Hello, World</h1';
});

Route::get('/penjumlahan', function () {
    $a = 1;
    $b = 2;
    $c = $a + $b;
    return "Hasil Penjumlahan = $c";
});

// Route::get('/data_diri', function () {
//     $nama = "Bima Nugraha Satria Yuda";
//     $no_hp = '085707357009';
//     $alamat = "Bhineka 8 no 23";
//     return "Nama saya adalah $nama <br> Alamat saya adalah $alamat <br> No HP saya $no_hp";
// }); 

// Route::get('/home', function (){
//     return view('home');
// });

Route::get('/home', [FileController::class, 'index']);
Route::get('/about', [FileController2::class, 'index']);
Route::get('/beranda', [Beranda::class, 'index']);
Route::get('/tentang', [Tentang::class, 'index']);
Route::get('/lokasi', [lokasi::class, 'index']);
Route::get('/ProgramStudi', [programstudi::class, 'index']);