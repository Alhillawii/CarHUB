<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarImageController;
use \App\Http\Controllers\DashboardController ;
use \App\Http\Controllers\RentalsController;
use \App\Http\Controllers\ContactController;
use App\Http\Controllers\CarDetailsRenderController;
use App\Http\Controllers\CarReservationController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\TesteimonialController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MasterRenderController;
use App\Http\Controllers\userrentals;

Route::get('/', function () {
    return view('welcome');
});


// Auth::routes();


Route::get('/car/{id}', [CarDetailsRenderController::class, 'show'])->name('car.details');
Route::post('/car/{id}/comment', [CarDetailsRenderController::class, 'addComment'])->name('car.addComment');
Route::post('/reserve', [CarReservationController::class, 'reserve'])->name('car.reserve');

Route::middleware('auth')->group(function () {
    Route::get('/userrentals', [userrentals::class, 'index']);
    Route::post('/rentals/{id}/cancel', [userrentals::class, 'cancel'])->name('rentals.cancel');
});
Route::get('/userrentals', [userrentals::class, 'index'])->name('userrentals.index');



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//^ ----------------------------------dashboard route end-----------------------------------------
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/admin',[DashboardController::class, 'indexTwo'])->name('dashboard.admin.index');
Route::put('/dashboard/admin/{admin}',[DashboardController::class, 'update'])->name('dashboard.admin.update');
//^ ----------------------------------dashboard route end-----------------------------------------


Route::get('/index', function () {
    return view('master.index');
});

Route::get('/carcat', function () {
    return view('master.carcat');
});

Route::get('/about', function () {
    return view('master.about');
});
Route::get('/contact', function () {
    return view('master.contact');
});
Route::get('/service', function () {
    return view('master.service');
});
Route::get('/test', function () {
    return view('master.testimonials');
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
Route::delete('dashboard/cars/{car}/upload/delete', [CarImageController::class, 'destroy'])->name('car.destroy.images');

Route::get('dashboard/cars', [CarController::class , "index"])->name("car.index");

Route::get('dashboard/cars/create', [CarController::class , "create"])->name("car.create");
Route::post('dashboard/cars', [CarController::class , "store"])->name("car.store");

Route::PUT('dashboard/cars/{car}', [CarController::class , "update"])->name("car.update");
Route::get('dashboard/cars/{car}/edit' ,[CarController::class , 'edit'])->name('car.edit');

Route::get('dashboard/cars/{car}', [CarController::class , "show"])->name("car.show");

Route::delete('dashboard/cars/{car}', [CarController::class , "destroy"])->name("car.destroy");
//^ ----------------------------------car route end ----------------------------------------



//^ ----------------------------------testimonials route start ----------------------------------------
Route::resource('testimonials', TesteimonialController::class);
//^ ----------------------------------testimonials route end ----------------------------------------


//^ ----------------------------------brand route start ----------------------------------------
Route::get('dashboard/brands', [BrandController::class, 'index'])->name('brands.index');

Route::get('dashboard/brands/create', [BrandController::class, 'create'])->name('brands.create');
Route::post('dashboard/brands', [BrandController::class, 'store'])->name('brands.store');

Route::get('dashboard/brands/{id}/edit', [BrandController::class, 'edit'])->name('brands.edit');
Route::put('dashboard/brands/{id}', [BrandController::class, 'update'])->name('brands.update');

Route::get('dashboard/brands/{id}', [BrandController::class, 'show'])->name('brands.show');

Route::delete('dashboard/brands/{id}', [BrandController::class, 'destroy'])->name('brands.destroy');
//^ ----------------------------------brand route end ----------------------------------------


//^ ----------------------------------car_review route start ----------------------------------------
Route::get('dashboard/reviews', [ReviewController::class, 'index'])->name('reviews.index');

Route::get('dashboard/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');

Route::post('dashboard/reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('dashboard/reviews/{id}', [ReviewController::class, 'show'])->name('reviews.show');

Route::get('dashboard/reviews/{id}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');

Route::put('dashboard/reviews/{id}', [ReviewController::class, 'update'])->name('reviews.update');

Route::delete('dashboard/reviews/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
//^ ----------------------------------car_review route end ----------------------------------------


// ^----------------------------------rental route start-----------------------------------------
Route::get('dashboard/rentals', [RentalsController::class , "index"])->name("rental.index");

Route::PUT('dashboard/rentals/{rental}', [RentalsController::class , "update"])->name("rental.update");
Route::get('dashboard/rentals/{rental}/edit' ,[RentalsController::class , 'edit'])->name('rental.edit');

Route::get('dashboard/rentals/{rental}', [RentalsController::class , "show"])->name("rental.show");

Route::delete('dashboard/rentals/{rental}', [RentalsController::class , "destroy"])->name("rental.destroy");
//^ ----------------------------------rental route end-----------------------------------------


// ^----------------------------------contact route start-----------------------------------------
Route::get('dashboard/contact', [ContactController::class , "index"])->name("contact.index");
Route::get('dashboard/contact/{contact}', [ContactController::class , "show"])->name("contact.show");
Route::delete('dashboard/contact/{contact}', [ContactController::class , "destroy"])->name("contact.destroy");
// add the create and store (tamimi)
//^ ----------------------------------contact route end-----------------------------------------
Route::get('/dash', function () {
    return view('dashboard.dash.main');
})->middleware(['auth','admin']);



/////////////////////////// dashboard

Route::get('/hhome', function () {
    return view('index');
});



Route::get('log',[LoginController::class,'log'])->name("logg");

///////////////////////// 



Route::get('/index', [MasterRenderController::class, 'index']);
// Route::get('/car/{id}', [CarDetailsRenderController::class, 'index'])->name('carDetail.index');



