<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController as ControllersBaseController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembelianController;



route::get('/', [ControllersBaseController::class, 'index']);
route::get('profile', [ControllersBaseController::class, 'profile']);
route::get('contact', [ControllersBaseController::class, 'contact']);
route::get('faq', [ControllersBaseController::class, 'faq']);
route::resource('produk', ProdukController::class);
route::resource('barang', BarangController::class);
route::resource('pemasok',PemasokController::class);
route::resource('user',UserController::class);
route::resource('pelanggan',PelangganController::class);
route::resource('pembelian',PembelianController::class);
