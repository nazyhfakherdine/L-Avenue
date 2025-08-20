<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    // Get All Invoices
    public function index()
    {
        return response()->json(Invoice::with(['guest','booking'])->get());
    }

    // Create Invoice
    public function store(Request $request)
    {
        $validated = $request->validate([
            'booking_id'      => 'required|exists:bookings,id',
            'guest_id'        => 'required|exists:guests,id',
            'amount'          => 'required|numeric|min:0',
            'currency'        => 'required|string|size:3',
            'payment_method'  => 'nullable|string|max:50',
            'status'          => 'in:unpaid,paid,refunded',
            'paid_at'         => 'nullable|date'
        ]);

        $invoice = Invoice::create($validated);

        return response()->json($invoice, 201);
    }

    // Get Invoice by ID
    public function show($id)
    {
        $invoice = Invoice::with(['guest','booking'])->findOrFail($id);
        return response()->json($invoice);
    }

    // Update Invoice
    public function update(Request $request, $id)
    {
        $invoice = Invoice::findOrFail($id);

        $validated = $request->validate([
            'amount'          => 'sometimes|numeric|min:0',
            'currency'        => 'sometimes|string|size:3',
            'payment_method'  => 'nullable|string|max:50',
            'status'          => 'sometimes|in:unpaid,paid,refunded',
            'paid_at'         => 'nullable|date'
        ]);

        $invoice->update($validated);

        return response()->json($invoice);
    }

    // Delete Invoice
    public function destroy($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();

        return response()->json(['message' => 'Invoice deleted successfully']);
    }
}
