<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TampilanController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TampilanController::class, 'index']);

//bungkus dengan route grup
Route::group(['middleware' => ['auth']], function () {


    // Buat route untuk after_registrasi
    Route::get('/after_register', function () {
        return view('after_register');
    });

    //Buat route group baru berdasarkan role : admin dan manager
    Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {



        //Buat routing untuk dashboard pakek controller
        Route::get('/dashboard', [DashboardController::class, 'index']);

        //Buat routing untuk produk pake controller
        Route::get('/produk', [ProdukController::class, 'index'])->name('produk');

        Route::get('/kategori', [KategoriProdukController::class, 'index'])->name('kategoriproduk');

        //buat route untuk frontend index
        Route::get('/darma', [FrontendController::class, 'index']);

        Route::get('/kesuma', [FrontendController::class, 'kesuma']);

        //Bikin routing untuk create dan store
        Route::get('/produk/create', [ProdukController::class, 'create']);
        //Bikin routing untuk kirim data menggunakan store
        Route::post('/produk/store', [ProdukController::class, 'store']);
        //Bikin routing untuk edit
        Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
        //Bikin routing untuk edit data menggunakan update
        Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
        //Bikin routing untuk delete data menggunakan destroy
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

    });
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');