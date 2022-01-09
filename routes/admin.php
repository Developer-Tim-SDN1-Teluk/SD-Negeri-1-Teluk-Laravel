<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use  App\Http\Controllers\Admin\ContentManagement\Dashboard\SambutanController;
use  App\Http\Controllers\Admin\ContentManagement\Dashboard\PrestasiController;
use  App\Http\Controllers\Admin\ContentManagement\Dashboard\EkstraController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\RuangLabController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\KantinController;
use App\Http\Controllers\Admin\ContentManagement\Profile\GurudanKaryawanController;
use App\Http\Controllers\Admin\ContentManagement\Profile\VisidanMisiController;
use App\Http\Controllers\Admin\ContentManagement\Berita\ContentBeritaController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\RuangGuruController;

Route::group(['middleware' => ["Admin"], 'as' => 'adm.'], function() {
    // Dashboard Admin
    Route::get('/admin',[DashboardController::class,'index'])->name('dashboardadmin');
    // Conten Management Dashboard Sambutan
    Route::get('/admin/dashboard/sambutan',[SambutanController::class,'index'])->name('sambutan');
    // Conten Management Dashboard Prestasi
    Route::get('/admin/dashboard/prestasi',[PrestasiController::class,'index'])->name('prestasi');
    // Conten Management Dashboard Ekstrakulikuler
    Route::get('/admin/dashboard/ekstra',[EkstraController::class,'index'])->name('ekstra');
    // Fasilitas Ruang Lab
    Route::get('/admin/fasilitas/ruanglab',[RuangLabController::class,'index'])->name('ruanglab');
    // Fasilitas Kantin
    Route::get('/admin/fasilitas/kantin',[KantinController::class,'index'])->name('kantin');
     // Conten Management Dashboard Guru dan Karyawan
     Route::get('/admin/profile/gurudankaryawan',[GurudanKaryawanController::class,'index'])->name('gurudankaryawan');
     // Content Management Dashboard Visi dan Misi
     Route::get('/admin/profile/visidanmisi',[VisidanMisiController::class,'index'])->name('visidanmisi');
    // Content Berita
    Route::get('/admin/berita/contentberita',[ContentBeritaController::class,'index'])->name('contentberita');
    // Fasilitas Ruang Guru
    Route::get('/admin/fasilitas/ruangguru',[RuangGuruController::class,'index'])->name('ruangguru');

});
