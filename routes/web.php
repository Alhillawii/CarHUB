<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteimonialController;
// use App\Http\Controllers\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ReviewController;

use App\Http\Controllers\UserController;
use App\Models\Review;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/d', function () {
    return view('dashboard.car.index');
});

// ^----------------------------------user route start-----------------------------------------
Route::get('dashboard/users', [UserController::class , "index"])->name("user.index");

Route::get('dashboard/users/create', [UserController::class , "create"])->name("user.create");
Route::post('dashboard/users', [UserController::class , "store"])->name("user.store");

Route::PUT('dashboard/users/{user}', [UserController::class , "update"])->name("user.update");
Route::get('dashboard/users/{user}/edit' ,[UserController::class , 'edit'])->name('user.edit');

Route::get('dashboard/users/{user}', [UserController::class , "show"])->name("user.show");

Route::delete('dashboard/users/{user}', [UserController::class , "destroy"])->name("user.destroy");
//^ ----------------------------------user route start-----------------------------------------

// ^----------------------------------user route start-----------------------------------------
Route::get('dashboard/users', [UserController::class , "index"])->name("user.index");

Route::get('dashboard/users/create', [UserController::class , "create"])->name("user.create");
Route::post('dashboard/users', [UserController::class , "store"])->name("user.store");

Route::PUT('dashboard/users/{user}', [UserController::class , "update"])->name("user.update");
Route::get('dashboard/users/{user}/edit' ,[UserController::class , 'edit'])->name('user.edit');

Route::get('dashboard/users/{user}', [UserController::class , "show"])->name("user.show");

Route::delete('dashboard/users/{user}', [UserController::class , "destroy"])->name("user.destroy");
//^ ----------------------------------user route start-----------------------------------------


Route::resource('testimonials', TesteimonialController::class);



/////////////////////////////////// brand //////////////




Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');

Route::get('/brands/create', [BrandController::class, 'create'])->name('brands.create');
Route::post('/brands', [BrandController::class, 'store'])->name('brands.store');

Route::get('/brands/{id}/edit', [BrandController::class, 'edit'])->name('brands.edit');
Route::put('/brands/{id}', [BrandController::class, 'update'])->name('brands.update');


Route::get('/brands/{id}', [BrandController::class, 'show'])->name('brands.show');

Route::delete('/brands/{id}', [BrandController::class, 'destroy'])->name('brands.destroy');

////////////////////////////////////

Route::get('reviews', [ReviewController::class, 'index'])->name('reviews.index');

Route::get('reviews/create', [ReviewController::class, 'create'])->name('reviews.create');

Route::post('reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('reviews/{id}', [ReviewController::class, 'show'])->name('reviews.show');

Route::get('reviews/{id}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');

Route::put('reviews/{id}', [ReviewController::class, 'update'])->name('reviews.update');

Route::delete('reviews/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
