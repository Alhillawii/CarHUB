<?php

use App\Http\Controllers\CarDetailsRenderController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Auth::routes();



Route::get('/car/{id}', [CarDetailsRenderController::class, 'show'])->name('car.details');
Route::post('/car/{id}/comment', [CarDetailsRenderController::class, 'addComment'])->name('car.addComment');






Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/d', function () {
    return view('dashboard.car.index');
});
