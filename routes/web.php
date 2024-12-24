<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.dashboard');
});
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
