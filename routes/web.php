<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendBooking;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LiveStreamController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\PortforlioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SiteSettingsController;
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
Route::get('/academy', [FrontEndController::class, 'academy'])->name('academy');
Route::get('/terms', [FrontEndController::class, 'terms'])->name('terms');
Route::get('/privacy', [FrontEndController::class, 'privacy'])->name('privacy');
Route::get('/booking-policy', [FrontEndController::class, 'bookingPolicy'])->name('booking-policy');
Route::resource('/booking-page', FrontendBooking::class)->middleware('auth');
Route::resource('/contact-form', ContactFormController::class);
Route::post('/logout', function () {
    Auth::guard('web')->logout();

    return redirect('/');
})->name('logout');

Route::get('/v1/payments', [DashboardController::class, 'userPaymentApi'])->name('api.payments')->middleware(['auth', 'verified']);
Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::view('/profile', 'profile')->name('profile');
    Route::get('/settings', [SiteSettingsController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.settings');
    Route::resource('/bookings', BookingController::class)->middleware(['auth', 'verified']);
    Route::resource('/brands', BrandsController::class)->middleware(['auth', 'verified']);
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings')->middleware(['auth', 'verified']);
    Route::get('/bookings/client', [DashboardController::class, 'clientBookings'])->name('client.bookings')->middleware(['auth', 'verified']);
    Route::post('/bookings/{booking}/pay', [BookingController::class, 'initiatePayment'])->name('booking.initiatePayment')->middleware(['auth', 'verified']);
    Route::get('/sessions', [DashboardController::class, 'sessions'])->name('dashboard.sessions')->middleware(['auth', 'verified']);
    Route::get('/payments', [DashboardController::class, 'getAdminPayments'])->name('dashboard.payments')->middleware(['auth', 'verified']);
    Route::get('/payments/donate', [DashboardController::class, 'donateNow'])->name('dashboard.payments.donate')->middleware(['auth', 'verified']);
    Route::get('/users', [UserController::class, 'index'])->name('dashboard.users')->middleware(['auth', 'verified']);
    Route::get('/users/{user}', [UserController::class, 'show'])->name('dashboard.users.show')->middleware(['auth', 'verified']);
    Route::post('/users/{user}/send-mail', [UserController::class, 'sendMail'])->name('dashboard.users.sendMail')->middleware(['auth', 'verified']);
    Route::get('/users/{user}/payments', [UserController::class, 'userPayments'])->name('dashboard.user.payments')->middleware(['auth', 'verified']);
    Route::get('/users/{user}/bookings', [UserController::class, 'userBookings'])->name('dashboard.user.bookings')->middleware(['auth', 'verified']);
    Route::get('/media', [DashboardController::class, 'media'])->name('dashboard.media')->middleware(['auth', 'verified']);
    Route::resource('/gallery', GalleryController::class)->middleware(['auth', 'verified']);
    Route::get('/gallery', [GalleryController::class, 'index'])->name('dashboard.gallery')->middleware(['auth', 'verified']);
    Route::resource('/portfolio', PortforlioController::class)->middleware(['auth', 'verified']);
    Route::get('/dashboard/services', [ServiceController::class, 'index'])->name('dashboard.service')->middleware(['auth', 'verified']);
    Route::resource('/services', ServiceController::class)->middleware(['auth', 'verified']);
    Route::resource('/packages', PackagesController::class)->middleware(['auth', 'verified']);
    Route::get('/portfolio', [PortforlioController::class, 'index'])->name('dashboard.portfolio')->middleware(['auth', 'verified']);
    Route::get('/packages', [PackagesController::class, 'index'])->name('packages')->middleware(['auth', 'verified']);
    Route::resource('/streams', LiveStreamController::class)->middleware(['auth', 'verified']);
    Route::get('/streams', [LiveStreamController::class, 'index'])->name('dashboard.streams')->middleware(['auth', 'verified']);
    Route::post('/streams/{stream}/end', [LiveStreamController::class, 'stop'])->name('dashboard.streams.end')->middleware(['auth', 'verified']);
})->middleware(['auth', 'verified']);


require __DIR__.'/auth.php';
