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
Route::post('/datatable/users', "Users@datatable");



Route::get('/kategori-aset', "API\KategoriAset@index")->middleware("cek_login_api");
Route::get('/kategori-aset/{id}', "API\KategoriAset@show")->middleware("cek_login_api");
Route::post('/kategori-aset/tambah', "API\KategoriAset@store")->middleware("cek_login_api");
Route::post('/kategori-aset/edit/{id}', "API\KategoriAset@edit")->middleware("cek_login_api");
Route::get('/kategori-aset/hapus/{id}', "API\KategoriAset@destroy")->middleware("cek_login_api");

Route::get('/users', "API\Users@index")->middleware("cek_login_api");
Route::get('/users/{id}', "API\Users@show")->middleware("cek_login_api");
Route::post('/users/tambah', "API\Users@store")->middleware("cek_login_api");
Route::post('/users/edit/{id}', "API\Users@edit")->middleware("cek_login_api");
Route::get('/Users/hapus/{id}', "API\Users@destroy")->middleware("cek_login_api");

Route::get('/aset/{id_aset}/kondisi-aset', "API\KondisiAset@index")->middleware("cek_login_api");
Route::get('/aset/{id_aset}/kondisi-aset/tambah', "API\KondisiAset@create")->middleware("cek_login_api");
Route::post('/aset/{id_aset}/kondisi-aset/tambah', "API\KondisiAset@store")->middleware("cek_login_api");
Route::get('/aset/{id_aset}/kondisi-aset/edit/{id}', "API\KondisiAset@edit")->middleware("cek_login_api");
Route::post('/aset/{id_aset}/kondisi-aset/edit/{id}', "API\KondisiAset@update")->middleware("cek_login_api");
Route::get('/aset/{id_aset}/kondisi-aset/hapus/{id}', "API\KondisiAset@destroy")->middleware("cek_login_api");

Route::get('/aset', "API\Aset@index")->middleware("cek_login_api");
Route::get('/aset/{id}', "API\Aset@show")->middleware("cek_login_api");
Route::post('/aset/tambah', "API\Aset@store")->middleware("cek_login_api");
Route::post('/aset/edit/{id}', "API\Aset@edit")->middleware("cek_login_api");
Route::get('/aset/hapus/{id}', "API\Aset@destroy")->middleware("cek_login_api");

Route::get('/beranda', "API\Halaman@beranda")->middleware("cek_login_api");


Route::post('/login', "API\Users@cekLogin");


