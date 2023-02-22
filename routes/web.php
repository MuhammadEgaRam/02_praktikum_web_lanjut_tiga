<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

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

// 1
Route::get('/', [HomeController::class, 'index']);
// 2
Route::prefix('/category')->group(function () {
    Route::get('/marbel-edu-games', [ProductsController::class, 'marbeledu']);
    Route::get('/marbelnfriends', [ProductsController::class, 'marbelnfriends']);
    Route::get('/storybooks', [ProductsController::class, 'storybooks']);
    Route::get('/kidssongs', [ProductsController::class, 'kidssongs']);
});
//3
Route::get('/news', [NewsController::class, 'news']);
Route::get('/covid/{id}', [NewsController::class, 'covid']);
//4
Route::prefix('/program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan', [ProgramController::class, 'kunjungan']);
});
//5
Route::get('/', [AboutController::class, 'about']);
//6
Route::get('/kontak', [ContactController::class, 'index']);