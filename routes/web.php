<?php

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin routes
Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->group(function () {
    Route::resource('user', UserController::class);
    Route::resource('order', OrderController::class);
    Route::resource('review', ReviewController::class);
    Route::resource('service', ServiceController::class);


});

// freelance routes
Route::namespace('App\Http\Controllers\Freelance')->prefix('freelance')->group(function () {
    // Route::get('/', 'PostController@index');
    // Route::resource('posts', 'PostController');
    // Route::resource('comments', 'CommentController');
    // //...
});

// User routes
Route::namespace('App\Http\Controllers\User')->prefix('user')->group(function () {
    // Route::get('/', 'ProfileController@index');
    // Route::resource('profile', 'ProfileController');
    // Route::resource('settings', 'SettingsController');
});