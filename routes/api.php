<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//~ Route::middleware('auth:api')->get('/user', function (Request $request) {
    //~ return $request->user();
//~ });

Route::post('/datatable/kategori-aset', "KategoriAset@datatable");
Route::post('/datatable/kondisi-aset/{id_aset}', "KondisiAset@datatable");
Route::post('/datatable/aset', "Aset@datatable");
Route::post('/datatable/lokasi', "Lokasi@datatable");



Route::get('/kategori-aset', "API\KategoriAset@index");
Route::get('/kategori-aset/{id}', "API\KategoriAset@show");
Route::post('/kategori-aset/tambah', "API\KategoriAset@store");
Route::post('/kategori-aset/edit/{id}', "API\KategoriAset@edit");
Route::get('/kategori-aset/hapus/{id}', "API\KategoriAset@destroy");

Route::get('/users', "API\Users@index");
Route::get('/users/{id}', "API\Users@show");
Route::post('/users/tambah', "API\Users@store");
Route::post('/users/edit/{id}', "API\Users@edit");
Route::get('/Users/hapus/{id}', "API\Users@destroy");

Route::get('/aset/{id_aset}/kondisi-aset', "API\KondisiAset@index");
Route::get('/aset/{id_aset}/kondisi-aset/tambah', "API\KondisiAset@create");
Route::post('/aset/{id_aset}/kondisi-aset/tambah', "API\KondisiAset@store");
Route::get('/aset/{id_aset}/kondisi-aset/edit/{id}', "API\KondisiAset@edit");
Route::post('/aset/{id_aset}/kondisi-aset/edit/{id}', "API\KondisiAset@update");
Route::get('/aset/{id_aset}/kondisi-aset/hapus/{id}', "API\KondisiAset@destroy");

Route::get('/aset', "API\Aset@index");
Route::get('/aset/{id}', "API\Aset@show");
Route::post('/aset/tambah', "API\Aset@store");
Route::post('/aset/edit/{id}', "API\Aset@edit");
Route::get('/aset/hapus/{id}', "API\Aset@destroy");

Route::get('/beranda', "API\Halaman@beranda");


