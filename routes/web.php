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
Route::view('/','landing/v_landing')->name('landing');
Route::view('/kalendar', 'v_kalendar')->name('kalendar');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// route::view('/pencarian', 'v_pencarian');
route::get('/pencarian', [PencarianController::class, 'pencarianForm'])->name('pencarian');
Route::get('/pencarian/cari', [PencarianController::class, 'cari'])->name('pencarian.cari');
route::get('/penambahan', [PenambahanController::class, 'penambahanForm'])->name('penambahan');
Route::POST('/penambahan/tambah',[PenambahanController::class, 'tambah'])->name('penambahan.tambah');
Route::POST('/penambahan/tambahTopik',[PenambahanController::class, 'tambahTopik'])->name('penambahan.tambahTopik');


Route::view('/test',[PenambahanController::class, 'v_index'])->name('test');



