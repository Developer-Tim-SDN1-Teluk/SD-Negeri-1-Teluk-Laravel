<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use  App\Http\Controllers\Admin\ContentManagement\Dashboard\SambutanController;
use  App\Http\Controllers\Admin\ContentManagement\Dashboard\EkstraController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\RuangLabController;
use App\Http\Controllers\Admin\ContentManagement\Profile\GurudanKaryawanController;
use App\Http\Controllers\Admin\ContentManagement\Berita\ContentBeritaController;

Route::group(['middleware' => ["Admin"], 'as' => 'adm.'], function() {
    // Dashboard Admin
    Route::get('/admin',[DashboardController::class,'index'])->name('dashboardadmin');
    // Conten Management Dashboard Sambutan
    Route::get('/admin/dashboard/sambutan',[SambutanController::class,'index'])->name('sambutan');
    // Conten Management Dashboard Ekstrakulikuler
    Route::get('/admin/dashboard/ekstra',[EkstraController::class,'index'])->name('ekstra');
    // Fasilitas Ruang Lab
    Route::get('/admin/fasilitas/ruanglab',[RuangLabController::class,'index'])->name('ruanglab');
     // Conten Management Dashboard Guru dan Karyawan
     Route::get('/admin/dashboard/gurudankaryawan',[GurudanKaryawanController::class,'index'])->name('gurudankaryawan');
    // Content Berita
    Route::get('/admin/berita/contentberita',[ContentBeritaController::class,'index'])->name('contentberita');

});
