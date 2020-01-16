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

Route::get('/siswa',function(){
    return view('siswa/index');
});

Route::resource('/sekolah','SekolahController');

Route::get('/guru','GuruController@index');
Route::resource('logins','AuthController');
Route::resource('penerbits','PenerbitController');
Route::resource('siswas','SiswaController');
Route::resource('books','BookController');
