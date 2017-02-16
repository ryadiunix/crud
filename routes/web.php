<?php

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

/*Route::get('/{nama}', function () {
    //return view('demo.index');
    return $nama;
});*/
/*
Route::get('/tes', 'BelajarController@index');
Route::get('/demo', 'BelajarController@baru');

Route::get('/', 'BukuController@index');
Route::get('/tes2', 'BukuController@index');
Route::get('/input', 'BukuController@store');
Route::get('/coba', 'BukuController@larav');*/

Route::resource('/buku', 'BukuController');