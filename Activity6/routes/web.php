<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/customer', [OrderController::class, 'customer']);
Route::get('/item', [OrderController::class, 'item']);
Route::get('/order', [OrderController::class, 'order']);
Route::get('/orderdetails', [OrderController::class, 'orderDetails']);
