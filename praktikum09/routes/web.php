<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\SkillController;
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


//buat route salam

Route::get('/salam', function () {
    return "Selamat Datang Noviana Nur Shanti";
});

//buat route kabar
Route::get('/kabar', function () {
    return view('kondisi');
});

//buat route nilai
Route::get('/nilai', function () {
    return view('nilai');
});

//buat route pasien
Route::get('/pasien', function () {
    return view('pasien');
});

//buat route form
Route::get('/form', [FormController::class, 'index']);

//buat route hasil form
Route::POST('/hasil', [FormController::class, 'hasil']);

//buat route skill
Route::get('/skill',[SkillController::class, 'index']);

//buat route hasilskill
Route::POST('/hasilskill',[SkillController::class, 'skill']);