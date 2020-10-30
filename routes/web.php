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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'BaseController@index');

Route::get('book', 'BookController@index');

Route::get('book/{judul}', 'BookController@viewJudul');

Route::get('book/view/{judul}', 'BookController@judulBuku');