<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteimonialController;
// use App\Http\Controllers\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarImageController;


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
//^ ----------------------------------user route end-----------------------------------------

// ^----------------------------------car route start-----------------------------------------

Route::get('dashboard/cars/{car}/upload', [CarImageController::class, "index"])->name("car.upload.images");
Route::post('dashboard/cars/{car}/upload', [CarImageController::class, 'store'])->name('car.store.images');
Route::get('dashboard/cars-image/{car}/delete', [CarImageController::class, 'destroy'])->name('car.destroy.images');

Route::get('dashboard/cars', [CarController::class , "index"])->name("car.index");

Route::get('dashboard/cars/create', [CarController::class , "create"])->name("car.create");
Route::post('dashboard/cars', [CarController::class , "store"])->name("car.store");

Route::PUT('dashboard/cars/{car}', [CarController::class , "update"])->name("car.update");
Route::get('dashboard/cars/{car}/edit' ,[CarController::class , 'edit'])->name('car.edit');

Route::get('dashboard/cars/{car}', [CarController::class , "show"])->name("car.show");

Route::delete('dashboard/cars/{car}', [CarController::class , "destroy"])->name("car.destroy");



//^ ----------------------------------car route end ----------------------------------------




Route::resource('testimonials', TesteimonialController::class);
