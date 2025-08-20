<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{

public function index() {
    return response()->json(\App\Models\Guest::all());
}
    // إنشاء ضيف جديد
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|unique:guests,email',
            'phone'       => 'nullable|string|max:20',
            'dob'         => 'nullable|date',
            'national_id' => 'nullable|string|max:50',
            'address'     => 'nullable|string',
        ]);

        $guest = Guest::create($validated);

        return response()->json($guest, 201);
    }

    // عرض ضيف واحد
    public function show($id)
    {
        $guest = Guest::findOrFail($id);
        return response()->json($guest);
    }

    // تحديث بيانات ضيف
    public function update(Request $request, $id)
    {
        $guest = Guest::findOrFail($id);

        $validated = $request->validate([
            'name'        => 'sometimes|string|max:255',
            'email'       => 'sometimes|email|unique:guests,email,' . $guest->id,
            'phone'       => 'nullable|string|max:20',
            'dob'         => 'nullable|date',
            'national_id' => 'nullable|string|max:50',
            'address'     => 'nullable|string',
        ]);

        $guest->update($validated);

        return response()->json($guest);
    }

    // حذف ضيف
    public function destroy($id)
    {
        $guest = Guest::findOrFail($id);
        $guest->delete();

        return response()->json(['message' => 'Guest deleted successfully']);
    }
}
