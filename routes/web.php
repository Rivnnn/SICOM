<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController as AUserController;
use App\Http\Controllers\Admin\ServiceController as AServiceController;
use App\Http\Controllers\Admin\OrderController as AOrderController ;
use App\Http\Controllers\Admin\CategoryController as ACategoryController;
use App\Http\Controllers\Admin\ReviewController as AReviewController;
use App\Http\Controllers\Admin\DashboardController as ADashboardController;

use App\Http\Controllers\Seller\UserController as SUserController;
use App\Http\Controllers\Seller\ServiceController as SServiceController;
use App\Http\Controllers\Seller\OrderController as SOrderController ;
use App\Http\Controllers\Seller\CategoryController as SCategoryController;
use App\Http\Controllers\Seller\ReviewController as SReviewController;
use App\Http\Controllers\Seller\MesaagesController as SMesaagesController;
use App\Http\Controllers\Seller\DashboardController as SDashboardController;

use App\Http\Controllers\User\DashboardController as UDashboardController;
use App\Http\Controllers\User\OrderController as UOrderController;
use App\Http\Controllers\User\ReviewController as UReviewController;
use App\Http\Controllers\User\PaymentController as UPaymentController;

use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
})->name('home');


Auth::routes();

// Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [ADashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('users', AUserController::class);
    Route::resource('services', AServiceController::class);
    Route::resource('orders', AOrderController::class);
    Route::resource('category', ACategoryController::class);
    Route::resource('reviews', AReviewController::class);
});


Route::put('seller/orders/{order}/update-status', [SOrderController::class, 'updateStatus'])
->name('seller.orders.updateStatus')
->middleware('auth');

Route::middleware('auth')->prefix('seller')->name('seller.')->group(function () {
    Route::get('dashboard', [SDashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('services', SServiceController::class);
    Route::resource('orders', SOrderController::class);

    // Route::get('profile', [SellerProfileController::class, 'edit'])->name('profile.edit');
    // Route::put('profile', [SellerProfileController::class, 'update'])->name('profile.update');
    // Route::resource('messages', SMessageController::class);
});

// User Routes
Route::middleware('auth')->prefix('user')->name('user.')->group(function () {
    Route::get('dashboard', [UDashboardController::class, 'index'])->name('dashboard');
    // Route::resource('services', UserServiceController::class);
    Route::resource('orders', UOrderController::class);
    // Route::get('profile', [UserProfileController::class, 'edit'])->name('profile.edit');
    // Route::put('profile', [UserProfileController::class, 'update'])->name('profile.update');
    Route::get('user/orders/{order}/review', [UReviewController::class, 'create'])->name('review.create');
    Route::post('user/orders/{order}/review', [UReviewController::class, 'store'])->name('review.store');
    Route::get('payment/{order}', [UPaymentController::class, 'show'])->name('payment.show');
    Route::post('handle-payment/{order}', [UPaymentController::class, 'handlePayment'])->name('payment.handle');
    Route::get('payment-success/{order}', [UPaymentController::class, 'paymentSuccess'])->name('payment.success');
    Route::get('payment-cancel/{order}', [UPaymentController::class, 'paymentCancel'])->name('payment.cancel');
    // Route::resource('messages', UserMessageController::class);
});


