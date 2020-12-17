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

Route::get('halo', function() {
	return "Halo, Selamat datang di webnya amin";
}) ;

Route::get('blog', function () {
	return view('blog');
}) ; 

Route::get('/login','App\Http\Controllers\UserController@index');

Route::get('/siswa','App\Http\Controllers\SiswaController@index');
Route::get('/siswa/absensi','App\Http\Controllers\SiswaController@absensi');
Route::post('/siswa/absensi/store','App\Http\Controllers\SiswaController@storeabsensi');
Route::get('/siswa/materi','App\Http\Controllers\SiswaController@materi');


Route::get('/guru','App\Http\Controllers\GuruController@index');
Route::get('/guru/absensi','App\Http\Controllers\GuruController@absensi');
Route::get('/guru/materi','App\Http\Controllers\GuruController@materi');
Route::get('/guru/materi/tambah','App\Http\Controllers\GuruController@tambahmateri');
Route::post('/guru/materi/store','App\Http\Controllers\GuruController@storemateri');


Route::get('amin','App\Http\Controllers\AminController@index');
Route::get('iman','App\Http\Controllers\ImanController@index');
Route::get('dumdum','App\Http\Controllers\ImanController@dumdum');

Route::get('/iman/{nama}', 'App\Http\Controllers\ImanController@detdet');

Route::get('/formulir', 'App\Http\Controllers\ImanController@formulir');
Route::post('/formulir/post', 'App\Http\Controllers\ImanController@post');
