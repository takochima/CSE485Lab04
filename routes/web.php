<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class);
Route::resource('order_details', OrderDetailController::class);
Route::resource('orders', OrderController::class);
Route::resource('customers', CustomerController::class);