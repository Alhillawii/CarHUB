<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarReviewController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestimonialController; 
// Routes for Car Reviews
Route::get('car_reviews/{id}', [ReviewController::class, 'show'])->name('car_reviews.show');
Route::delete('car_reviews/{id}', [ReviewController::class, 'destroy'])->name('car_reviews.destroy');

// Resource routes for Reviews
Route::resource('reviews', ReviewController::class);

// Default route
Route::get('/', function () {
    return view('welcome');
});

// Authentication routes (commented out)
// Auth::routes();

// Home route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Test route
Route::get('/d', function () {
    return view('dashboard.car.index');
});

// ^---------------------------------- User routes start -----------------------------------------
Route::get('dashboard/users', [UserController::class, "index"])->name("user.index");
Route::get('dashboard/users/create', [UserController::class, "create"])->name("user.create");
Route::post('dashboard/users', [UserController::class, "store"])->name("user.store");
Route::put('dashboard/users/{user}', [UserController::class, "update"])->name("user.update");
Route::get('dashboard/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::get('dashboard/users/{user}', [UserController::class, "show"])->name("user.show");
Route::delete('dashboard/users/{user}', [UserController::class, "destroy"])->name("user.destroy");
// ^---------------------------------- User routes end -----------------------------------------

// Resource routes for Testimonials
Route::resource('testimonials', TestimonialController::class);
