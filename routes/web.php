<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
});

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cekLoginUser:asatidz']], function() {
        Route::resource('izin', IzinController::class);
    });

    Route::group(['middleware' => ['cekUserLogin:santri']], function() {
        Route::resource('santri', Santri::class);
    });
});

Route::get('/', function () {
    return view('index');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});


Route::resource('izin', IzinController::class);
