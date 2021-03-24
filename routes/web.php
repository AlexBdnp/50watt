<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.tonirovka');
});

Route::post('/', [ClientController::class, 'someAction']);

Route::post('/admin', [AdminController::class, 'index']);