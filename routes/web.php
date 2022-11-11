<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('front');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('buku', BukuController::class);
    Route::get('delbuk/{buku}', [BukuController::class, 'destroy']);

    Route::resource('kategori', KategoriController::class);
    Route::get('delkat/{kategori}', [KategoriController::class, 'destroy']);
});

Route::get('front', [BukuController::class, 'depan']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
