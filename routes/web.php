<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IzinController;
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
