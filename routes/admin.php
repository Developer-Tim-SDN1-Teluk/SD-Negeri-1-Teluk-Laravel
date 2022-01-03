<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;

Route::group(['middleware' => ["Admin"], 'as' => 'adm.'], function() {
    // Dashboard Admin
    Route::get('/admin',[DashboardController::class,'index'])->name('dashboardadmin');

});
