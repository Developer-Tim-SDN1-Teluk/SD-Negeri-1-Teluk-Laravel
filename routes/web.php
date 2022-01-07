<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotpassController;
use App\Http\Controllers\ResetController;
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

Route::get('/',[DashboardController::class,'index'])->name('dashboard');

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/galerifoto', function () {
    return view('galerifoto');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('login',[LoginController::class,'login'])->name('loginFun');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');
 
Route::get('/register', [RegisterController::class, 'index']);

Route::get('/forgotpass',[ForgotpassController::class, 'index']);

Route::get('/reset',[ResetController::class, 'index']);