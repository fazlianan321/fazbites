
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

// HALAMAN UTAMA
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// DAFTAR PRODUK
Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

// DETAIL PRODUK
Route::get('/products/{slug}', [ProductController::class, 'show'])
    ->name('products.show');
