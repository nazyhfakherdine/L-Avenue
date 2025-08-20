<?php

namespace App\Http\Controllers;

use App\Models\ConciergeRequest;
use Illuminate\Http\Request;

class ConciergeRequestController extends Controller
{
    // Get All Concierge Requests
    public function index()
    {
        return response()->json(
            ConciergeRequest::with(['guest', 'booking'])->get()
        );
    }

    // Create Concierge Request
    public function store(Request $request)
    {
        $validated = $request->validate([
            'guest_id'    => 'required|exists:guests,id',
            'booking_id'  => 'nullable|exists:bookings,id',
            'subject'     => 'required|string|max:255',
            'description' => 'nullable|string',
            'status'      => 'required|string|in:open,in_progress,closed',
            'priority'    => 'required|string|in:low,medium,high',
        ]);

        $concierge = ConciergeRequest::create($validated);

        return response()->json(
            $concierge->load(['guest', 'booking']),
            201
        );
    }

    // Get Concierge Request by ID
    public function show($id)
    {
        $concierge = ConciergeRequest::with(['guest', 'booking'])->findOrFail($id);
        return response()->json($concierge);
    }

    // Update Concierge Request
    public function update(Request $request, $id)
    {
        $concierge = ConciergeRequest::findOrFail($id);

        $validated = $request->validate([
            'guest_id'    => 'sometimes|exists:guests,id',
            'booking_id'  => 'nullable|exists:bookings,id',
            'subject'     => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'status'      => 'sometimes|string|in:open,in_progress,closed',
            'priority'    => 'sometimes|string|in:low,medium,high',
        ]);

        $concierge->update($validated);

        return response()->json($concierge->load(['guest', 'booking']));
    }

    // Delete Concierge Request
    public function destroy($id)
    {
        $concierge = ConciergeRequest::findOrFail($id);
        $concierge->delete();

        return response()->json(['message' => 'Concierge request deleted successfully']);
    }
}
