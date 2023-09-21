<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

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
   return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/jayapura', function () {
    return view('jayapura');
});

Route::get('/', [SearchController::Class,'index']);
Route::get('/read',[SearchController::class,'read']);
Route::get('/ajax',[SearchController::class,'ajax']);

