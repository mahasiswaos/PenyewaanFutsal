<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//	return View::make('hello');
//});
$base = 'App\\Controllers\\';
Route::get('/home',$base.'HomeController@home');

//panggil penyewa
Route::get('/penyewa',$base.'PenyewaControllers@tampil');
Route::get('/penyewa/tambah',$base.'PenyewaControllers@tambah');
Route::POST('/penyewa/tambah/proses',$base.'PenyewaControllers@tambahProses');
Route::get('/penyewa/ubah/{id}',$base.'PenyewaControllers@ubah');
Route::POST('/penyewa/ubah/proses/{id}',$base.'PenyewaControllers@ubahProses');
Route::get('/penyewa/hapus/{id}',$base.'PenyewaControllers@hapus');

//panggil boking
Route::get('/boking',$base.'BokingController@tampil');
Route::get('/boking/tambah',$base.'BokingController@tambah');
Route::post('/boking/tambah/proses',$base.'BokingController@tambahProses');
Route::get('/boking/ubah/{id}',$base.'BokingController@ubah');
Route::post('/boking/ubah/proses/{id}',$base.'BokingController@ubahProses');
Route::get('/boking/hapus/{id}',$base.'BokingController@hapus');

//panggil lapangan
Route::get('/lapangan',$base.'LapanganController@tampil');
Route::get('/lapangan/tambah',$base.'LapanganController@tambah');
Route::post('/lapangan/tambah/proses',$base.'LapanganController@tambahProses');
Route::get('/lapangan/ubah/{id}',$base.'LapanganController@ubah');
Route::post('/lapangan/ubah/proses/{id}',$base.'LapanganController@ubahProses');
Route::get('/lapangan/hapus/{id}',$base.'LapanganController@hapus');

