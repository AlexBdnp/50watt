<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.tonirovka');
})->name('index');
Route::post('/', [ClientController::class, 'storePhone']);

Route::get('/register', [RegistrationController::class, 'registrationCreate'])->name('register.create');
Route::post('/register', [RegistrationController::class, 'registrationStore'])->name('register.store');

Route::prefix('/admin')->group(function() {
  Route::get('/', [AdminController::class, 'index'])->name('admin');
  Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
  Route::post('/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
});



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

// ------------Требуется тонировщик------------
Route::get('/rabotnik-tonirovka', function() {
  return view('front.rabota');
});

// ------------Требуется автоэлектрик------------
Route::get('/rabotnik-avtoelectrik', function() {
  return view('front.rabota2');
});

Route::get('/fox', function() { 
    return 'Quick brown fox jumps over lazy dog';
});

Route::get('/test-db', function() {
  return DB::select('show tables');
});

Route::redirect('/avtozvuk/magnitoly/kenwood-kmm-bt-206', 'https://loudcar.com.ua/avtozvuk/magnitola/kenwood-kmm-bt206');
Route::redirect('/avtosteklo/lobovoe/chevrolet-aveo-t200', '/');
Route::redirect('/avtoservis-dnepr-50watt/remont-stekla', '/remont-stekla');