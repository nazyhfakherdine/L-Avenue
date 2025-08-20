<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Get All Bookings
    public function index()
    {
        return response()->json(Booking::with(['guest', 'room'])->get());
    }

    // Create Booking
    public function store(Request $request)
    {
        $validated = $request->validate([
            'guest_id'     => 'required|exists:guests,id',
            'room_id'      => 'required|exists:rooms,id',
            'checkin'      => 'required|date|after_or_equal:today',
            'checkout'     => 'required|date|after:checkin',
            'status'       => 'required|string|in:pending,confirmed,cancelled,completed',
            'total_amount' => 'required|numeric|min:0'
        ]);

        $booking = Booking::create($validated);

        return response()->json($booking->load(['guest', 'room']), 201);
    }

    // Get Booking by ID
    public function show($id)
    {
        $booking = Booking::with(['guest', 'room'])->findOrFail($id);
        return response()->json($booking);
    }

    // Update Booking
    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $validated = $request->validate([
            'guest_id'     => 'sometimes|exists:guests,id',
            'room_id'      => 'sometimes|exists:rooms,id',
            'checkin'      => 'sometimes|date|after_or_equal:today',
            'checkout'     => 'sometimes|date|after:checkin',
            'status'       => 'sometimes|string|in:pending,confirmed,cancelled,completed',
            'total_amount' => 'sometimes|numeric|min:0'
        ]);

        $booking->update($validated);

        return response()->json($booking->load(['guest', 'room']));
    }

    // Delete Booking
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return response()->json(['message' => 'Booking deleted successfully']);
    }
}
