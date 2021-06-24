<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\PenambahanController;

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
Route::view('/','landing/v_landing');

Route::get('/home', [HomeController::class, 'index']);

route::view('/pencarian', 'v_pencarian');
Route::get('/pencarian/cari', [PencarianController::class, 'cari']);
route::view('/penambahan', 'v_penambahan');
// Route::get('/penambahan/tambah', [PenambahanController::class, 'tambah']);
Route::POST('/penambahan/tambah',[PenambahanController::class, 'tambah'])->name('tambah.post');




