<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource("/client", ClientController::class);

Route::resource("/product", ProductController::class);