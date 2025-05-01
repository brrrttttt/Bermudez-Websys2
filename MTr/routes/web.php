<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::post('/products/{product}/update-quantity', [ProductController::class, 'updateQuantity'])->name('products.updateQuantity');
