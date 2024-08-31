<?php

use App\Http\Controllers\CarDetailsRenderController;
use App\Http\Controllers\CarReservationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteimonialController;
// use App\Http\Controllers\Auth;
use App\Http\Controllers\UserController;


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