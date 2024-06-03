<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchievmentController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\TridharmaController;
use App\Models\Gallery;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/struktur-organisasi', [AboutController::class, 'strukturOrganisasi']);
Route::get('/sejarah-tujuan', [AboutController::class, 'sejarahTujuan']);
Route::get('/visi-misi', [AboutController::class, 'visiMisi']);
Route::get('/sasaran-strategi', [AboutController::class, 'sasaranStrategi']);
Route::get('/fasilitas', [FacilityController::class, 'index']);
Route::get('/pengabdian', [TridharmaController::class, 'pengabdian']);
Route::get('/penelitian', [TridharmaController::class, 'penelitian']);
Route::get('/dosen', [LecturerController::class, 'index']);
Route::get('/berita', [NewsController::class, 'index']);
Route::get('/berita/{news}', [NewsController::class, 'show']);
Route::get('/kompetensi-lulusan', fn () => view('kompetensi-lulusan'));
Route::get('/prestasi', [AchievmentController::class, 'index']); // belum selesai, view not ready and data not ready
Route::get('/prestasi/{achievment}', [AchievmentController::class, 'show']);
Route::get('/alumni', [AlumniController::class, 'index']);
Route::get('/dokumen', [DocumentController::class, 'index']);
Route::get('/kurikulum', [CurriculumController::class, 'index']);
Route::get('/penerimaan', [ReceptionController::class, 'index']);
Route::get('/pengumuman', [AnnouncementController::class, 'index']);
Route::get('/galeri', [GalleryController::class, 'index']);
