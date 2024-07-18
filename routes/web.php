<?php
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\OrdersController as AdminOrdersController;
use App\Http\Controllers\Admin\CategoriesController as AdminCategoriesController;
use App\Http\Controllers\Admin\ReviewsController as AdminReviewsController;
use App\Http\Controllers\Admin\profileController as AdminprofileController;

use App\Http\Controllers\Seller\DashboardController as SellerDashboardController;
use App\Http\Controllers\Seller\ServiceController as SellerServiceController;
use App\Http\Controllers\Seller\OrdersController as SellerOrdersController;
use App\Http\Controllers\Seller\MessageController as SellerMessageController;

use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\ReviewController as UserReviewController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\MessagesController;
use App\Http\Controllers\User\RoleController;
use App\Http\Controllers\User\ProfileController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('user', AdminUserController::class);
    Route::resource('orders', AdminOrdersController::class);
    Route::resource('review', AdminReviewsController::class);
    Route::resource('service', AdminServiceController::class);
    Route::resource('categories', AdminCategoriesController::class);
});

Route::middleware('auth')->prefix('seller')->name('seller.')->group(function () {
    // Route::get('dashboard', [SellerDashboardController::class])->name('dashboard');
    Route::resource('services', SellerServiceController::class);
    Route::resource('orders', SellerOrdersController::class);
    Route::resource('messages', SellerMessageController::class);
    Route::put('orders/{order}/update-status', [SellerOrdersController::class, 'updateStatus'])->name('orders.updateStatus');
    // Route::get('/seller/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/seller/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/seller/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('user')->name('user.')->group(function () {
//   L  Route::post('switch-role', [RoleController::class, 'switchToSeller'])->name('switch.role');
    Route::get('dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::resource('orders', OrderController::class);
    Route::resource('reviews', UserReviewController::class);
    Route::resource('messages', MessagesController::class);
    Route::resource('profile', ProfileController::class);
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
