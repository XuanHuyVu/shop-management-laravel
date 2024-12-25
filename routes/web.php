<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('layouts.dashboard');
});

Route::resource('product', ProductController::class);
Route::resource('customer', CustomerController::class);
Route::resource('order', OrderController::class);
