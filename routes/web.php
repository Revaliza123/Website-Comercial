<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HomeController;

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
    return view('home');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/tambah', [ProdukController::class, 'create']);
Route::post('/produk', [ProdukController::class, 'store']);
Route::get('/edit/{id}', [ProdukController::class, 'edit']);
Route::put('/produk/{id}', [ProdukController::class, 'update']);
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('hapus');;


Route::get('/', [HomeController::class, 'index']);
Route::get('/deskripsi/{id}', [HomeController::class, 'show']);