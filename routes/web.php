<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteimonialController;
use App\Http\Controllers\Auth;


Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/d', function () {
    return view('dashboard.car.index');
});


Route::resource('testimonials', TesteimonialController::class);