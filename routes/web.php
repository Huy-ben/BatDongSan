<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\client\PageController::class, 'index']);

Route::get('/tests', [App\Http\Controllers\client\TestController::class, 'index']);