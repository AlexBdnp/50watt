<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.tonirovka');
})->name('index');

Route::post('/', [ClientController::class, 'someAction']);

// ------------Тонировка----------------
Route::get('/tonirovka', function () {
    return view('front.tonirovka');
});

// ------------Сигнализации https://50watt.com.ua/ustanovka-signalizacii----------------
Route::get('/ustanovka-signalizacii', function () {
    return view('front.signalki');
});

// ------------Автозвук----------------
Route::get('/avtozvuk', function () {
    return view('front.avtozvuk');
});
// ------------Ремонт стекла--------------
Route::get('/remont-stekla', function() {
    return view('front.remontstekla');
});

Route::get('/fox', function() { 
    return 'Quick brown fox jumps over lazy dog';
});

Route::get('/admin', [AdminController::class, 'index']);

// ------------Требуется тонировщик------------
Route::get('/rabotnik-tonirovka', function() {
    return view('front.rabota');
});

// ------------Требуется автоэлектрик------------
Route::get('/rabotnik-avtoelectrik', function() {
    return view('front.rabota2');
});

Route::redirect('/avtozvuk/magnitoly/kenwood-kmm-bt-206', 'https://loudcar.com.ua/avtozvuk/magnitola/kenwood-kmm-bt206');
Route::redirect('/avtosteklo/lobovoe/chevrolet-aveo-t200', '/');
Route::redirect('/avtoservis-dnepr-50watt/remont-stekla', '/remont-stekla');