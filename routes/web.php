<?php

use App\Http\Controllers\CarDetailsRenderController;
use App\Http\Controllers\CarReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Auth::routes();


Route::get('/car/{id}', [CarDetailsRenderController::class, 'show'])->name('car.details');
Route::post('/car/{id}/comment', [CarDetailsRenderController::class, 'addComment'])->name('car.addComment');
Route::post('/reserve', [CarReservationController::class, 'reserve'])->name('car.reserve');



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/d', function () {
    return view('dashboard.car.index');
});
