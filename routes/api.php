<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    GuestController,
    RoomController,
    AmenityController,
    BookingController,
    ConciergeRequestController,
    InvoiceController
};

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
