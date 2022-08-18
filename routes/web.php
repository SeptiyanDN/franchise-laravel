<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PemilikBisnisController;
use App\Models\PemilikBisnis;
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


// Route::get('/login', [AuthController::class,'login'])->name('login')->middleware('guest');
// Route::post('/login',[AuthController::class,'authentication']);
// Route::get('/logout',[AuthController::class,'logout'])->middleware('auth');


// Route::get('/',[BerandaController::class,'index'])->middleware('auth');
// Route::get('pemilik-bisnis', [PemilikBisnisController::class, 'index'])->middleware('auth');

Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'login')->name('login');
    Route::post('/login/prosses','authentication');
    Route::get('/logout',[AuthController::class,'logout'])->middleware('auth');
});

Route::group(['middleware'=> ['auth']],function(){
    Route::group(['middleware' => ['cekUserLogin:1']], function() {
        Route::get('/',[BerandaController::class,'index']);
        Route::get('/pemilik-bisnis',[PemilikBisnisController::class,'index']);

    });

    Route::group(['middleware' => ['cekUserLogin:3']], function() {
        Route::get('/dashboard-pemilik-bisnis',[PemilikBisnisController::class,'index']);
    });
});

