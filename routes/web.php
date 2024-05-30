<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/register', [CustomAuthController::class, 'home'])->name('home');
Route::get('register', [CustomAuthController::class, 'register'])->name('register');
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');

// for getting booking page
Route::get('booking', [CustomAuthController::class, 'booking'])->name('booking');
Route::POST('postlogin', [CustomAuthController::class, 'login'])->name('postlogin');
Route::POST('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
// new
Route::get('/dashboard/{user}/edit', [CustomAuthController::class, 'edit'])->name('users.edit');
Route::put('/dashboard/{user}', [CustomAuthController::class, 'update'])->name('users.update');
Route::delete('/dashboard/{user}', [CustomAuthController::class, 'destroy'])->name('users.destroy');

// for template navigation
Route::get('/', [CustomAuthController::class, 'index'])->name('index');
Route::get('/packages', [CustomAuthController::class, 'packages'])->name('packages');

// for store booking
Route::post('/', [BookingController::class, 'store'])->name('bookings.save');
// for contact
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'contactDetails'])->name('contact.form');
// for edit , del booking
Route::get('/booking/{booking}/editbooking', [CustomAuthController::class, 'editbooking'])->name('bookings.edit');
Route::put('/booking/{booking}', [CustomAuthController::class, 'updatebooking'])->name('bookings.update');
Route::delete('/booking/{booking}', [CustomAuthController::class, 'destroybooking'])->name('bookings.destroy');
//for PackagesBooking--------
Route::get('/package_bookings',[CustomAuthController::class, 'packageBooking'])->name('package_bookings');
Route::delete('/products/{id}', [CustomAuthController::class, 'destroyPackage'])->name('products.destroy');
// search
Route::get('/search', [CustomAuthController::class, 'search'])->name('search');
// // for package
Route::get('/packege_upload', [CustomAuthController::class, 'package']);
Route::post('/packege_upload', [CustomAuthController::class, 'storepackage'])->name('package.store');
// for Admin panel order details
Route::get('/OrdersList',[NewController::class, 'OrdersList'])->name('OrdersList');

//---------- stripe routes
Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

//------------JAZZ CASH---
Route::get('/checkout/{id}', [NewController::class, 'index'])->name('checkout');
Route::post('/checkout', [NewController::class, 'DoCheckout'])->name('doCheckout');
Route::post('/paymentStatus', [NewController::class, 'paymentStatus']);

// Weather----------
Route::match(["get","post"], "weather",[WeatherController::class, 'index'])->name('weather');
