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

Route::get('/', 'MasyarakatController@index');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@postlogin');
Route::get('/register', 'MasyarakatController@register')->name('register');
Route::post('/register', 'MasyarakatController@postregister');
Route::get('/register-admin', 'AdminController@register')->name('registeradmin');
Route::post('/register-admin', 'AdminController@postregister');


Route::group(['middleware' => 'auth:masyarakat'], function () {
    Route::get('/masyarakat-dashboard', 'MasyarakatController@dashboard');
    Route::get('/masyarakat-aduan', 'MasyarakatController@createaduan');
    Route::post('/masyarakat-aduan', 'MasyarakatController@postaduan');
    Route::get('/masyarakat-show-aduan/{id}', 'MasyarakatController@show');
    Route::get('/masyarakat-tanggapan/{id}', 'MasyarakatController@tanggapan');
    Route::get('/masyarakat-profile', 'MasyarakatController@profile');
    Route::get('/masyarakat-edit-profile', 'MasyarakatController@editprofile');
    Route::post('/masyarakat-edit-profile', 'MasyarakatController@postprofile');
});

Route::group(['middleware' => 'auth:petugas'], function () {

    Route::group(['middleware' => 'checkLevel:petugas'], function () {
        Route::get('/petugas-dashboard', 'PetugasController@dashboard');
        Route::get('/petugas-dft-pengaduan', 'PetugasController@pengaduan');
        Route::get('/petugas-proses/{id}', 'PetugasController@proses');
        Route::get('/petugas-laporan/{id}', 'PetugasController@tindaklanjut');
        Route::post('/postlaporan/{id}', 'PetugasController@postlaporan');
        Route::get('/petugas-profile', 'PetugasController@profile');
        Route::get('/petugas-detail/{id}', 'PetugasController@detail');
        Route::get('/petugas-validate/{id}', 'PetugasController@validasi');
    });

    Route::group(['middleware' => 'checkLevel:admin'], function () {
        Route::get('/admin-dashboard', 'AdminController@dashboard');
        Route::get('/admin-dft-masyarakat', 'AdminController@masyarakat');
        Route::get('/admin-add-petugas/{nik}', 'AdminController@promote');
        Route::get('/admin-dft-petugas', 'AdminController@petugas');
        Route::get('/admin-dft-pengaduan', 'AdminController@pengaduan');
        Route::get('/admin-dft-admin', 'AdminController@admin');
        Route::get('/admin-dlt-msy/{nik}', 'AdminController@dltmsy');
        Route::get('/admin-dlt-ptg/{nik}', 'AdminController@dltptg');
        Route::get('/admin-profile', 'AdminController@profile');
        Route::get('/show-ad/{nik}', 'AdminController@showaduan');
        Route::get('/admin-proses/{id}', 'AdminController@proses');
        Route::get('/admin-ptg-histori/{nik}', 'AdminController@ptghistori');
        Route::get('/admin-cetak-laporan', 'AdminController@cetak');
    });
});

Route::group(['middleware' => 'auth:petugas,masyarakat'], function () {
    Route::get('/logout', 'AuthController@logout');
});
