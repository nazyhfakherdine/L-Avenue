<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    GuestController,
    RoomController,
    AmenityController,
    BookingController,
    ConciergeRequestController,
    InvoiceController,
    AuthController
};
use App\Http\Controllers\Auth\RegisteredUserController;

//Route::post('/register', [RegisteredUserController::class, 'store']);
// Guests
Route::apiResource('guests', GuestController::class);

// Rooms
Route::apiResource('rooms', RoomController::class);

// Amenities
Route::apiResource('amenities', AmenityController::class);

// Bookings
Route::apiResource('bookings', BookingController::class);

// Concierge Requests
Route::apiResource('concierge-requests', ConciergeRequestController::class);

// Invoices
Route::apiResource('invoices', InvoiceController::class);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::middleware('auth:sanctum')->get('/me', [AuthController::class, 'me']);
