<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkbarController;


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

Route::get('/', [AkbarController::class, 'index']);
Route::get('/homepage', [AkbarController::class, 'homepage']);
Route::get('/rekomendasis', [AkbarController::class, 'rekomendasi']);
Route::get('/movie/{id}', [AkbarController::class, 'detail']);
Route::get('/rekomendasi/{id}', [AkbarController::class, 'rekomendasi']);
Route::get('/watchlist', [AkbarController::class, 'watchlist'])->name('watchlist');
Route::get('/search', [AkbarController::class, 'search']);
