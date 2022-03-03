<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;
Use Illuminate\Support\Facades\View;

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
//nomor 1 
Route::get('/home', [HomeController::class, 'home']);

//nomor 2
Route::prefix('produk')->group(function () {
    Route::get('/pensil', [ProductController::class, 'pensil']);
    Route::get('/penghapus', [ProductController::class, 'penghapus']);
    Route::get('/penggaris', [ProductController::class, 'penggaris']);
});

//nomor 3
Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/{String}', [NewsController::class, 'newsString']);

//nomor 4 
Route::prefix('program')->group(function (){
    Route::get('/java', [ProgramController::class, 'java']);
    Route::get('/python', [ProgramController::class, 'python']);
    Route::get('/c++', [ProgramController::class, 'cc']);
});

//nomor 5
Route::get('/about', [AboutUsController::class, 'about']);

//nomor 6
Route::resource('/contactus', ContactController::class)->only(['index']);
