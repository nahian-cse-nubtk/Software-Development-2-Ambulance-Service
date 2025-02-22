<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FeedbackController;

// Welcome Page Route
Route::get('/', [PageController::class, 'welcome'])->name('welcome');

// Ambulance Booking Page
Route::get('/booking', [PageController::class, 'booking']); 

// Contact Page
Route::get('/contact', [PageController::class, 'contact']); 

// Store Booking Form Data
Route::post('/store-booking', [PageController::class, 'storeBooking'])->name('store.booking');
Route::get('/register-ambulance', [PageController::class, 'registerAmbulance'])->name('ambulances.register');
Route::post('/store-ambulance', [PageController::class, 'storeAmbulance'])->name('ambulances.store');
Route::get('/ambulances', [PageController::class, 'ambulances'])->name('ambulances.index');
Route::patch('/ambulance/{id}/update-availability', [PageController::class, 'updateAvailability'])->name('ambulances.update_availability');
Route::get('/bookings', [PageController::class, 'showBookings'])->name('bookings.index');
Route::post('/submit-feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/', [FeedbackController::class, 'index'])->name('welcome');
Route::get('/terms-and-conditions', function () {
   return view('terms-and-conditions');
})->name('terms');

Route::get('/ambulances/search', [PageController::class, 'index'])->name('ambulances.search');