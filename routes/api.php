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
Route::get('/deletedProduk', 'ProdukController@deletedItem');
Route::get('/ProdukSortNama', 'ProdukController@sortNama');

//Layanan
Route::get('/showLayanan', 'LayananController@index');
Route::post('/createLayanan', 'LayananController@create');
Route::put('/updateLayanan/{id}', 'LayananController@update');
Route::get('/searchLayanan/{id}', 'LayananController@search');
Route::delete('/deleteLayanan/{id}', 'LayananController@delete');
Route::get('/deletedLayanan', 'LayananController@deletedItem');

//Supplier
Route::get('/showSupplier', 'SupplierController@index');
Route::post('/createSupplier', 'SupplierController@create');
Route::put('/updateSupplier/{id}', 'SupplierController@update');
Route::get('/searchSupplier/{id}', 'SupplierController@search');
Route::delete('/deleteSupplier/{id}', 'SupplierController@delete');
Route::get('/deletedSupplier', 'SupplierController@deletedItem');

//Customer
Route::get('/showCustomer', 'CustomerController@index');
Route::post('/createCustomer', 'CustomerController@create');
Route::put('/updateCustomer/{id}', 'CustomerController@update');
Route::get('/searchCustomer/{id}', 'CustomerController@search');
Route::delete('/deleteCustomer/{id}', 'CustomerController@delete');
Route::get('/deletedCustomer', 'CustomerController@deletedItem');

//Hewan
Route::get('/showHewan', 'HewanController@index');
Route::post('/createHewan', 'HewanController@create');
Route::put('/updateHewan/{id}', 'HewanController@update');
Route::get('/searchHewan/{id}', 'HewanController@search');
Route::delete('/deleteHewan/{id}', 'HewanController@delete');
Route::get('/deletedHewan', 'HewanController@deletedItem');
Route::get('/notDeletedHewan', 'HewanController@notDeletedItem');

//JenisHewan
Route::get('/showJenisHewan', 'JenisHewanController@index');
Route::post('/createJenisHewan', 'JenisHewanController@create');
Route::put('/updateJenisHewan/{id}', 'JenisHewanController@update');
Route::get('/searchJenisHewan/{id}', 'JenisHewanController@search');
Route::delete('/deleteJenisHewan/{id}', 'JenisHewanController@delete');
Route::get('/deletedJenisHewan', 'JenisHewanController@deletedItem');
Route::get('/notDeletedJenisHewan', 'JenisHewanController@notDeletedItem');

//Pegawai
Route::get('/showPegawai', 'PegawaiController@index');
Route::post('/createPegawai', 'PegawaiController@create');
Route::put('/updatePegawai/{id}', 'PegawaiController@update');
Route::get('/searchPegawai/{id}', 'PegawaiController@search');
Route::delete('/deletePegawai/{id}', 'PegawaiController@delete');
Route::post('/register', 'PegawaiController@register');
Route::post('/login', 'PegawaiController@login');
Route::get('/deletedPegawai', 'PegawaiController@deletedItem');

//TransaksiPembayaran
Route::get('/showTransaksiPembayaran', 'TransaksiPembayaranController@index');
Route::post('/createTransaksiPembayaran', 'TransaksiPembayaranController@create');
Route::put('/updateTransaksiPembayaran/{id}', 'TransaksiPembayaranController@update');
Route::get('/searchTransaksiPembayaran/{id}', 'TransaksiPembayaranController@search');
Route::delete('/deleteTransaksiPembayaran/{id}', 'TransaksiPembayaranController@delete');
Route::get('/downloadPDFTPP/{id}','TransaksiPembayaranController@downloadPDFTPP');
Route::get('/downloadPDFTPL/{id}','TransaksiPembayaranController@downloadPDFTPL');
Route::get('/deletedTransaksiPembayaran', 'TransaksiPembayaranController@deletedItem');

//TransaksiPemesanan
Route::get('/showTransaksiPemesanan', 'TransaksiPemesananController@index');
Route::post('/createTransaksiPemesanan', 'TransaksiPemesananController@create');
Route::put('/updateTransaksiPemesanan/{id}', 'TransaksiPemesananController@update');
Route::get('/searchTransaksiPemesanan/{id}', 'TransaksiPemesananController@search');
Route::delete('/deleteTransaksiPemesanan/{id}', 'TransaksiPemesananController@delete');
Route::get('/deletedTransaksiPemesanan', 'TransaksiPemesananController@deletedItem');

//TPP
Route::get('/showTPP', 'TPPController@index');
Route::post('/createTPP', 'TPPController@create');
Route::put('/updateTPP/{id}', 'TPPController@update');
Route::get('/searchTPP/{id}', 'TPPController@search');
Route::get('/searchIDTPP/{id}', 'TPPController@searchbyid');
Route::delete('/deleteTPP/{id}', 'TPPController@delete');
Route::get('/deletedTPP', 'TPPController@deletedItem');


//TPL
Route::get('/showTPL', 'TPLController@index');
Route::post('/createTPL', 'TPLController@create');
Route::put('/updateTPL/{id}', 'TPLController@update');
Route::get('/searchTPL/{id}', 'TPLController@search');
Route::delete('/deleteTPL/{id}', 'TPLController@delete');
Route::get('/deletedTPL', 'TPLController@deletedItem');

//UkuranHewan
Route::get('/showUkuranHewan', 'UkuranHewanController@index');
Route::post('/createUkuranHewan', 'UkuranHewanController@create');
Route::put('/updateUkuranHewan/{id}', 'UkuranHewanController@update');
Route::get('/searchUkuranHewan/{id}', 'UkuranHewanController@search');
Route::delete('/deleteUkuranHewan/{id}', 'UkuranHewanController@delete');
Route::get('/deletedUkuranHewan', 'UkuranHewanController@deletedItem');
Route::get('/notDeletedUkuranHewan', 'UkuranHewanController@notDeletedItem');

//LaporanProduk
Route::get('/showLaporanProduk', 'LaporanProdukController@index');
Route::post('/createLaporanProduk', 'LaporanProdukController@create');
Route::put('/updateLaporanProduk/{id}', 'LaporanProdukController@update');
Route::get('/searchLaporanProduk/{id}', 'LaporanProdukController@search');
Route::get('/searchLaporanProdukTahun/{id}', 'LaporanProdukController@searchTahun');
Route::get('/reportPerbulan', 'LaporanProdukController@reportPerbulan');
Route::get('/reportProdukLaris/{id}', 'LaporanProdukController@Laris');


//LaporanLayanan
Route::get('/showLaporanLayanan', 'LaporanLayananController@index');
Route::post('/createLaporanLayanan', 'LaporanLayananController@create');
Route::put('/updateLaporanLayanan/{id}', 'LaporanLayananController@update');
Route::get('/searchLaporanLayanan/{id}', 'LaporanLayananController@search');
Route::get('/searchLaporanLayananTahun/{id}', 'LaporanLayananController@searchTahun');
Route::get('/reportLayananLaris/{id}', 'LaporanLayananController@Laris');
Route::get('/reportPendapatanTahun/{id}', 'LaporanLayananController@totalPenjualan');

//LaporanPemesanan
Route::get('/showLaporanPemesanan', 'LaporanPemesananController@index');
Route::post('/createLaporanPemesanan', 'LaporanPemesananController@create');
Route::put('/updateLaporanPemesanan/{id}', 'LaporanPemesananController@update');
Route::get('/searchLaporanPemesanan/{id}', 'LaporanPemesananController@search');
Route::get('/searchLaporanPemesananTahun/{id}', 'LaporanPemesananController@searchTahun');
Route::get('/downloadPDFPemesananPerbulan', 'LaporanPemesananController@reportPerbulan');
Route::get('/downloadPDFPemesananTahunan/{id}', 'LaporanPemesananController@Tahunan');


//PemesananPembayaran
Route::get('/showPemesananPembayaran', 'PemesananPembayaranController@index');
Route::post('/createPemesananPembayaran', 'PemesananPembayaranController@create');
Route::put('/updatePemesananPembayaran/{id}', 'PemesananPembayaranController@update');
Route::get('/searchPemesananPembayaran/{id}', 'PemesananPembayaranController@search');
Route::delete('/deletePemesananPembayaran/{id}', 'PemesananPembayaranController@delete');
Route::get('/deletedPemesananPembayaran', 'PemesananPembayaranController@deletedItem');
Route::get('/downloadPDFPemesanan/{id}', 'PemesananPembayaranController@downloadPDFPemesanan');

Route::post('/sms', 'SmsController@sendSms');

Route::middleware('jwt.auth')->get('users', function(Request $request) {
    return auth()->user();
});
