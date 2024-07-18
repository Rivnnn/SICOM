<?php
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ReviewController as AdminReviewController;
use App\Http\Controllers\Admin\profileController as AdminprofileController;

<<<<<<< HEAD
use App\Http\Controllers\Seller\DashboardController as SellerDashboardController;
use App\Http\Controllers\Seller\ServiceController as SellerServiceController;
use App\Http\Controllers\Seller\OrderController as SellerOrderController;
use App\Http\Controllers\Seller\MessageController as SellerMessageController;

use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\OrderController as UserOrderController;
use App\Http\Controllers\User\ServiceController as UserServiceController;
use App\Http\Controllers\User\ReviewController as UserReviewController;
use App\Http\Controllers\User\MessageController as UserMessageController;
=======
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
>>>>>>> 42b18341464550f11dca950e966d67c2ead72565
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD
Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->group(function () {
    Route::get('dashboard', [AdminDashboardController::class]);
    Route::resource('user', AdminUserController::class);
    Route::resource('order', AdminOrderController::class);
    Route::resource('review', AdminReviewController::class);
    Route::resource('service', AdminServiceController::class);
    Route::resource('category', AdminCategoryController::class);
});
Route::namespace('App\Http\Controllers\Seller')->prefix('seller')->group(function () {
    Route::get('dashboard', [SellerDashboardController::class])->name('dashboard');
    Route::resource('services', SellerServiceController::class);
    Route::resource('orders', SellerOrderController::class);
    Route::resource('messages', SellerMessageController::class);
    // Route::get('/seller/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/seller/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/seller/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::namespace('App\Http\Controllers\User')->prefix('user')->group(function () {
    Route::get('dashboard', [UserDashboardController::class])->name('dashboard');
    Route::resource('services', UserServiceController::class)->only(['index', 'show']);
    Route::resource('orders', UserOrderController::class)->only(['index', 'show']);
    Route::resource('reviews', UserReviewController::class);
    Route::resource('messages', UserMessageController::class);
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
=======
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
>>>>>>> 42b18341464550f11dca950e966d67c2ead72565
