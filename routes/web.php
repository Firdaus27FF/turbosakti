<?php

use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\jenisprodukcontroller;
use App\Http\Controllers\stokprodukcontroller;
use App\Http\Controllers\catatkeuangancontroller;
use App\Http\Controllers\prediksipenjualancontroller;
use App\Http\Controllers\pelanggancontroller;
use App\Http\Controllers\ongkircontroller;
use App\Http\Controllers\pemesanancontroller;
use App\Http\Controllers\pembayarancontroller;

use App\Http\Controllers\detailprodukcontroller;
use App\Http\Controllers\detailproduk2controller;
use App\Http\Controllers\detailproduk3controller;


use Illuminate\Support\Facades\Route;

route::get('/', function (){
    return view('home');
});

route::get('/app', function () {
    return view('admin.app');
})->name('app'); 

Route::get('/app', function () {
    return view('admin.app');
});

Route::get('/users', function () {
    return view('users.index');
})->name('user');

route::get('/stokproduk', function () {
    return view('admin.produk.stokproduk.index');
})->name('stokproduk'); 

route::get('/catatkeuangan', function () {
    return view('admin.produk.catatkeuangan.index');
})->name('catatkeuangan'); 

route::get('/prediksipenjualan', function () {
    return view('admin.produk.prediksipenjualan.index');
})->name('prediksipenjualan');

route::get('/pelanggan', function () {
    return view('admin.produk.pelanggan.index');
})->name('pelanggan'); 

route::get('/ongkir', function () {
    return view('admin.produk.ongkir.index');
})->name('ongkir');

route::get('/pemesanan', function () {
    return view('admin.produk.pemesanan.index');
})->name('pemesanan');

route::get('/pembayaran', function () {
    return view('admin.produk.pembayaran.index');
})->name('pembayaran');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/dashboard', [dashboardcontroller::class,'index'])->name('dashboard');


Route::resource('dashboard', dashboardcontroller::class);
Route::resource('jenis', jenisprodukcontroller::class);
Route::resource('stok',  stokprodukcontroller::class);
Route::resource('catatkeuangan', catatkeuangancontroller::class);
Route::resource('prediksipenjualan', prediksipenjualancontroller::class);
Route::resource('pelanggan', pelanggancontroller::class);
Route::resource('ongkir',  ongkircontroller::class);
Route::resource('pemesanan', pemesanancontroller::class);
Route::resource('pembayaran', pembayarancontroller::class);
Route::resource('detailproduk', detailprodukcontroller::class);
Route::resource('detailproduk2', detailproduk2controller::class);
Route::resource('detailproduk3', detailproduk3controller::class);

// Route::get('jenisproduk/tampil', [jenisprodukController::class, 'tampiljenisproduk'])->name('tampiljenisproduk')->middleware('auth');
// Route::get('jenisproduk/tambah', [jenisprodukController::class, 'tambahjenisproduk'])->name('tambahjenisproduk')->middleware('auth');
// Route::post('jenisproduk/simpan', [jenisprodukController::class, 'simpanjenisproduk'])->name('simpanjenisproduk')->middleware('auth');

