<?php

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
    return view('welcome');
});
Route::get('/', function () {
    echo "Selamat Datang";
});
route::get('/about', function () {
    echo "NIM : 1941720182, NAMA : Ivanka Mauludi Juniar";
});
Route::get('/articles/{id}', function ($id) {
    echo "Halaman Artikel ".$id;
});