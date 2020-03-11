<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Produk
Route::get('/showProduk', 'ProdukController@index');
Route::post('/createProduk', 'ProdukController@create');
Route::put('/updateProduk/{id}', 'ProdukController@update');
Route::get('/searchProduk/{id}', 'ProdukController@search');
Route::delete('/deleteProduk/{id}', 'ProdukController@delete');


//Layanan
Route::get('/showLayanan', 'LayananController@index');
Route::post('/createLayanan', 'LayananController@create');
Route::put('/updateLayanan/{id}', 'LayananController@update');
Route::get('/searchLayanan/{id}', 'LayananController@search');
Route::delete('/deleteLayanan/{id}', 'LayananController@delete');

//Supplier
Route::get('/showSupplier', 'SupplierController@index');
Route::post('/createSupplier', 'SupplierController@create');
Route::put('/updateSupplier/{id}', 'SupplierController@update');
Route::get('/searchSupplier/{id}', 'SupplierController@search');
Route::delete('/deleteSupplier/{id}', 'SupplierController@delete');

//Customer
Route::get('/showCustomer', 'CustomerController@index');
Route::post('/createCustomer', 'CustomerController@create');
Route::put('/updateCustomer/{id}', 'CustomerController@update');
Route::get('/searchCustomer/{id}', 'CustomerController@search');
Route::delete('/deleteCustomer/{id}', 'CustomerController@delete');

//Hewan
Route::get('/showHewan', 'HewanController@index');
Route::post('/createHewan', 'HewanController@create');
Route::put('/updateHewan/{id}', 'HewanController@update');
Route::get('/searchHewan/{id}', 'HewanController@search');
Route::delete('/deleteHewan/{id}', 'HewanController@delete');

//JenisHewan
Route::get('/showJenisHewan', 'JenisHewanController@index');
Route::post('/createJenisHewan', 'JenisHewanController@create');
Route::put('/updateJenisHewan/{id}', 'JenisHewanController@update');
Route::get('/searchJenisHewan/{id}', 'JenisHewanController@search');
Route::delete('/deleteJenisHewan/{id}', 'JenisHewanController@delete');

//Pegawai
Route::get('/showPegawai', 'PegawaiController@index');
Route::post('/createPegawai', 'PegawaiController@create');
Route::put('/updatePegawai/{id}', 'PegawaiController@update');
Route::get('/searchPegawai/{id}', 'PegawaiController@search');
Route::delete('/deletePegawai/{id}', 'PegawaiController@delete');
Route::post('/register', 'PegawaiController@register');
Route::post('/login', 'PegawaiController@login');

//TransaksiPembayaran
Route::get('/showTransaksiPembayaran', 'TransaksiPembayaranController@index');
Route::post('/createTransaksiPembayaran', 'TransaksiPembayaranController@create');
Route::put('/updateTransaksiPembayaran/{id}', 'TransaksiPembayaranController@update');
Route::get('/searchTransaksiPembayaran/{id}', 'TransaksiPembayaranController@search');
Route::delete('/deleteTransaksiPembayaran/{id}', 'TransaksiPembayaranController@delete');

//TransaksiPemesanan
Route::get('/showTransaksiPemesanan', 'TransaksiPemesananController@index');
Route::post('/createTransaksiPemesanan', 'TransaksiPemesananController@create');
Route::put('/updateTransaksiPemesanan/{id}', 'TransaksiPemesananController@update');
Route::get('/searchTransaksiPemesanan/{id}', 'TransaksiPemesananController@search');
Route::delete('/deleteTransaksiPemesanan/{id}', 'TransaksiPemesananController@delete');

//TPP
Route::get('/showTPP', 'TPPController@index');
Route::post('/createTPP', 'TPPController@create');
Route::put('/updateTPP/{id}', 'TPPController@update');
Route::get('/searchTPP/{id}', 'TPPController@search');
Route::delete('/deleteTPP/{id}', 'TPPController@delete');

//TPL
Route::get('/showTPL', 'TPLController@index');
Route::post('/createTPL', 'TPLController@create');
Route::put('/updateTPL/{id}', 'TPLController@update');
Route::get('/searchTPL/{id}', 'TPLController@search');
Route::delete('/deleteTPL/{id}', 'TPLController@delete');

//UkuranHewan
Route::get('/showUkuranHewan', 'UkuranHewanController@index');
Route::post('/createUkuranHewan', 'UkuranHewanController@create');
Route::put('/updateUkuranHewan/{id}', 'UkuranHewanController@update');
Route::get('/searchUkuranHewan/{id}', 'UkuranHewanController@search');
Route::delete('/deleteUkuranHewan/{id}', 'UkuranHewanController@delete');

Route::middleware('jwt.auth')->get('users', function(Request $request) {
    return auth()->user();
});
