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


// Route kelola data users/karyawan
Route::get('/users', "Users@index");
Route::get('/users/tambah', "Users@create");
Route::post('/users/tambah', "Users@store");
Route::get('/users/edit/{id}', "Users@edit");
Route::post('/users/edit/{id}', "Users@update");
Route::get('/users/hapus/{id}', "Users@destroy");

// EOF Route kelola data users/karyawan


Route::get('/kategori-aset', "KategoriAset@index");
Route::get('/kategori-aset/tambah', "KategoriAset@create");
Route::post('/kategori-aset/tambah', "KategoriAset@store");
Route::get('/kategori-aset/edit/{id}', "KategoriAset@edit");
Route::post('/kategori-aset/edit/{id}', "KategoriAset@update");
Route::get('/kategori-aset/hapus/{id}', "KategoriAset@destroy");

Route::get('/kondisi-aset', "KondisiAset@index");
Route::get('/kondisi-aset/tambah', "KondisiAset@create");
Route::post('/kondisi-aset/tambah', "KondisiAset@store");
Route::get('/kondisi-aset/edit/{id}', "KondisiAset@edit");
Route::post('/kondisi-aset/edit/{id}', "KondisiAset@update");
Route::get('/kondisi-aset/hapus/{id}', "KondisiAset@destroy");

Route::get('/aset', "Aset@index");
Route::get('/aset/tambah', "Aset@create");
Route::post('/aset/tambah', "Aset@store");
Route::get('/aset/edit/{id}', "Aset@edit");
Route::post('/aset/edit/{id}', "Aset@update");
Route::get('/aset/hapus/{id}', "Aset@destroy");
Route::get('/aset/qr', "Aset@qrcode_aset");
Route::post('/aset/cetak-qr', "Aset@cetak_qrcode");


Route::get('/aset/{id_aset}/kondisi-aset', "KondisiAset@index");
Route::get('/aset/{id_aset}/kondisi-aset/tambah', "KondisiAset@create");
Route::post('/aset/{id_aset}/kondisi-aset/tambah', "KondisiAset@store");
Route::get('/aset/{id_aset}/kondisi-aset/edit/{id}', "KondisiAset@edit");
Route::post('/aset/{id_aset}/kondisi-aset/edit/{id}', "KondisiAset@update");
Route::get('/aset/{id_aset}/kondisi-aset/hapus/{id}', "KondisiAset@destroy");

Route::get('/lokasi', "Lokasi@index");
Route::get('/lokasi/tambah', "Lokasi@create");
Route::post('/lokasi/tambah', "Lokasi@store");
Route::get('/lokasi/edit/{id}', "Lokasi@edit");
Route::post('/lokasi/edit/{id}', "Lokasi@update");
Route::get('/lokasi/hapus/{id}', "Lokasi@destroy");

Route::get('/beranda', "Halaman@beranda");