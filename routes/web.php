<?php

use App\Http\Controllers\FacilityController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TridharmaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/struktur-organisasi', fn () => view('struktur-organisasi'));
Route::get('/sejarah-tujuan', fn () => view('sejarah-tujuan'));
Route::get('/visi-misi', fn () => view('visi-misi'));
Route::get('/sasaran-strategi', fn () => view('sasaran-strategi'));
Route::get('/fasilitas', [FacilityController::class, 'index']);
Route::get('/pengabdian', [TridharmaController::class, 'pengabdian']);
Route::get('/penelitian', [TridharmaController::class, 'penelitian']);
Route::get('/dosen', [LecturerController::class, 'index']);
Route::get('/berita', [NewsController::class, 'index']);
Route::get('/berita/{news}', [NewsController::class, 'show']);
Route::get('/kompetensi-lulusan', fn () => view('kompetensi-lulusan'));
