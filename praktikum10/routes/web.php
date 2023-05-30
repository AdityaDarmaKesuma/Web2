<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('welcome');
});

//Buat routing untuk dashboard pakek controller
Route::get('/dashboard', [DashboardController::class, 'index']);

//Buat routing untuk produk pake controller
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');


//buat route untuk frontend index
Route::get('/darma', [FrontendController::class, 'index']);

Route::get('/kesuma', [FrontendController::class, 'kesuma']);




