<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    // Get All Amenities
    public function index()
    {
        return response()->json(Amenity::all());
    }

    // Create Amenity
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255|unique:amenities,name',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
        ]);

        $amenity = Amenity::create($validated);

        return response()->json($amenity, 201);
    }

    // Get Amenity by ID
    public function show($id)
    {
        $amenity = Amenity::findOrFail($id);
        return response()->json($amenity);
    }

    // Update Amenity
    public function update(Request $request, $id)
    {
        $amenity = Amenity::findOrFail($id);

        $validated = $request->validate([
            'name'        => 'sometimes|string|max:255|unique:amenities,name,' . $amenity->id,
            'description' => 'nullable|string',
            'price'       => 'sometimes|numeric|min:0',
        ]);

        $amenity->update($validated);

        return response()->json($amenity);
    }

    // Delete Amenity
    public function destroy($id)
    {
        $amenity = Amenity::findOrFail($id);
        $amenity->delete();

        return response()->json(['message' => 'Amenity deleted successfully']);
    }
}
