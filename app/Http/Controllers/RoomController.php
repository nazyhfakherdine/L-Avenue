<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // Get All Rooms
    public function index()
    {
        return response()->json(Room::all());
    }

    // Create Room
    public function store(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required|string|max:50|unique:rooms,number',
            'type'   => 'required|string|max:100',
            'rate'   => 'required|numeric|min:0',
            'status' => 'required|string|in:available,occupied,maintenance',
            'capacity' => 'required|integer|min:1',
            'description' => 'nullable|string',
        ]);

        $room = Room::create($validated);

        return response()->json($room, 201);
    }

    // Get Room by ID
    public function show($id)
    {
        $room = Room::findOrFail($id);
        return response()->json($room);
    }

    // Update Room
    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);

        $validated = $request->validate([
            'number' => 'sometimes|string|max:50|unique:rooms,number,' . $room->id,
            'type'   => 'sometimes|string|max:100',
            'rate'   => 'sometimes|numeric|min:0',
            'status' => 'sometimes|string|in:available,occupied,maintenance',
            'capacity' => 'sometimes|integer|min:1',
            'description' => 'nullable|string',
        ]);

        $room->update($validated);

        return response()->json($room);
    }

    // Delete Room
    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return response()->json(['message' => 'Room deleted successfully']);
    }
}
