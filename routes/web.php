<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendBooking;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\LiveStreamController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use LivewireFilemanager\Filemanager\Http\Controllers\Api\FileController;


Route::get('/files/{$path}', [FileController::class, 'show'])
    ->where('path', '.*')
    ->name('assets.show');
Route::get('/', [FrontEndController::class, 'index'])->name('home');
Route::get('/donate', [FrontEndController::class, 'donate'])->name('donate');
Route::get('/about', [FrontEndController::class, 'about'])->name('about');
Route::get('/services', [FrontEndController::class, 'services'])->name('services');
Route::get('/contact', [FrontEndController::class, 'contact'])->name('contact');
Route::get('/live', [FrontEndController::class, 'live'])->name('live');
Route::get('/terms', [FrontEndController::class, 'terms'])->name('terms');
Route::get('/booking-policy', [FrontEndController::class, 'bookingPolicy'])->name('booking-policy');
Route::resource('/booking-page', FrontendBooking::class)->middleware('auth');

Route::post('/logout', function () {
    Auth::guard('web')->logout();
    return redirect('/');
})->name('logout');
Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::view('/profile', 'profile')->name('profile');
    Route::resource('/bookings', BookingController::class)->middleware(['auth', 'verified']);
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings')->middleware(['auth', 'verified']);
    Route::get('/bookings/client', [DashboardController::class, 'clientBookings'])->name('client.bookings')->middleware(['auth', 'verified']);
    Route::post('/bookings/{booking}/pay', [BookingController::class, 'initiatePayment'])->name('booking.initiatePayment')->middleware(['auth', 'verified']);
    Route::get('/sessions', [DashboardController::class, 'sessions'])->name('dashboard.sessions');
    Route::get('/payments', [DashboardController::class, 'getAdminPayments'])->name('dashboard.payments');
    Route::get('/users', [UserController::class, 'index'])->name('dashboard.users')->middleware(['auth']);
    Route::get('/users/{user}', [UserController::class, 'show'])->name('dashboard.users.show')->middleware(['auth']);
    Route::post('/users/{user}/send-mail', [UserController::class, 'sendMail'])->name('dashboard.users.sendMail')->middleware(['auth']);
    Route::get('/users/{user}/payments', [UserController::class, 'userPayments'])->name('dashboard.user.payments')->middleware(['auth']);
    Route::get('/users/{user}/bookings', [UserController::class, 'userBookings'])->name('dashboard.user.bookings')->middleware(['auth']);
    Route::get('/media', [DashboardController::class, 'media'])->name('dashboard.media')->middleware(['auth']);
    Route::resource('/streams', LiveStreamController::class)->middleware(['auth']);
    Route::get('/streams', [LiveStreamController::class, 'index'])->name('dashboard.streams')->middleware(['auth']);
    Route::post('/streams/{stream}/end', [LiveStreamController::class, 'stop'])->name('dashboard.streams.end')->middleware(['auth']);
})->middleware(['auth', 'verified']);


require __DIR__ . '/auth.php';
