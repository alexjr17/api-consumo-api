<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::apiResource('productos', ProductoController::class)->only('index', 'store');