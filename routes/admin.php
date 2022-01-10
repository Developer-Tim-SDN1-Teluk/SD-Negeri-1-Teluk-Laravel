<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\KantinController;
use  App\Http\Controllers\Admin\ContentManagement\Dashboard\EkstraController;
use  App\Http\Controllers\Admin\ContentManagement\Dashboard\TotalGuruController;
use  App\Http\Controllers\Admin\ContentManagement\Dashboard\HeaderController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\MusholaController;
use App\Http\Controllers\Admin\ContentManagement\Galeri\GaleriFotoController;
use App\Http\Controllers\Admin\ContentManagement\Galeri\GaleriVideoController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\RuangLabController;
use  App\Http\Controllers\Admin\ContentManagement\Dashboard\PrestasiController;
use  App\Http\Controllers\Admin\ContentManagement\Dashboard\SambutanController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\RuangGuruController;
use App\Http\Controllers\Admin\ContentManagement\Profile\VisidanMisiController;
use App\Http\Controllers\Admin\ContentManagement\Berita\ContentBeritaController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\PerpustakaanController;
use App\Http\Controllers\Admin\ContentManagement\Profile\GurudanKaryawanController;
use App\Http\Controllers\Admin\ContentManagement\Kontak\KontakController;

Route::group(['middleware' => ["Admin"], 'as' => 'adm.'], function() {
    // Dashboard Admin
    Route::get('/admin',[DashboardController::class,'index'])->name('dashboardadmin');
    // Conten Management Dashboard Sambutan
    Route::get('/admin/dashboard/sambutan',[SambutanController::class,'index'])->name('sambutan');
    // Conten Management Dashboard Prestasi
    Route::get('/admin/dashboard/prestasi',[PrestasiController::class,'index'])->name('prestasi');
    // Conten Management Dashboard Ekstrakulikuler
    Route::get('/admin/dashboard/ekstra',[EkstraController::class,'index'])->name('ekstra');
    // Conten Management Dashboard TotalGUru
    Route::get('/admin/dashboard/totalguru',[TotalGuruController::class,'index'])->name('totalguru');
    // Conten management Dashboard Header
    Route::get('/admin/dashboard/header',[HeaderController::class,'index'])->name('header');
     // Add Content Management Header
     Route::get('/admin/dashboard/header/add',[HeaderController::class,'add'])->name('addheader');
     Route::post('/admin/dashboard/header/add',[HeaderController::class,'store'])->name('storeheader');

    // Fasilitas Ruang Lab
    Route::get('/admin/fasilitas/ruanglab',[RuangLabController::class,'index'])->name('ruanglab');
    // Add Fasilitas Ruang Lab
    Route::get('/admin/fasilitas/ruanglab/add',[RuangLabController::class,'add'])->name('addruanglab');
    Route::post('/admin/fasilitas/ruanglab/add',[RuangLabController::class,'store'])->name('storeruanglab');

    // Fasilitas Kantin
    Route::get('/admin/fasilitas/kantin',[KantinController::class,'index'])->name('kantin');
     // Conten Management Dashboard Guru dan Karyawan
     Route::get('/admin/profile/gurudankaryawan',[GurudanKaryawanController::class,'index'])->name('gurudankaryawan');
     // Content Management Dashboard Visi dan Misi
     Route::get('/admin/profile/visidanmisi',[VisidanMisiController::class,'index'])->name('visidanmisi');
     // Add Visidanmisi
     Route::get('/admin/profile/visidanmisi/add',[VisidanMisiController::class,'add'])->name('addvisidanmisi');
     Route::post('/admin/profile/visidanmisi/add',[VisidanMisiController::class,'store'])->name('storevisidanmisi');
     
    // Content Berita
    Route::get('/admin/berita/contentberita',[ContentBeritaController::class,'index'])->name('contentberita');
    // Fasilitas Ruang Guru
    Route::get('/admin/fasilitas/ruangguru',[RuangGuruController::class,'index'])->name('ruangguru');
      // Add Fasilitas Ruang Guru          
    Route::get('/admin/fasilitas/ruangguru/add',[RuangGuruController::class,'add'])->name('addruangguru');
    Route::post('/admin/fasilitas/ruangguru/add',[RuangGuruController::class,'store'])->name('storeruangguru');

    // Galeri
    //galeri foto
    Route::get('/admin/galeri/galerifoto',[GaleriFotoController::class,'index'])->name('galerifoto');
    //Galeri Video
    Route::get('/admin/galeri/galerivideo',[GaleriVideoController::class,'index'])->name('galerivideo');
    // Add Fasilitas Ruang Lab
    Route::get('/admin/galeri/galerivideo/add',[GaleriVideoController::class,'add'])->name('addgalerivideo');
    Route::post('/admin/galeri/galerivideo/add',[GaleriVideoController::class,'post'])->name('postgalerivideo');
     // Fasilitas Mushola
     Route::get('/admin/fasilitas/mushola',[MusholaController::class,'index'])->name('mushola');
     // Fasilitas Perpustakaan
     Route::get('/admin/fasilitas/perpustakaan',[PerpustakaanController::class,'index'])->name('perpustakaan');
     Route::get('/admin/fasilitas/perpustakaan/add',[PerpustakaanController::class,'add'])->name('addperpustakaan');
     Route::post('/admin/fasilitas/perpustakaan/add',[PerpustakaanController::class,'store'])->name('storeperpustakaan');
     // Kontak
      Route::get('/admin/kontak',[KontakController::class,'index'])->name('kontak');
});
