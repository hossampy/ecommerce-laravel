<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/', [\App\Http\Controllers\StoreController::class,'index']);

Route::resource('products', ProductController::class);
