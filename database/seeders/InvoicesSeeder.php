<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoicesSeeder extends Seeder
{
    public function run(): void
    {
        Invoice::create([
            'booking_id' => 1,
            'guest_id' => 1,
            'amount' => 300.00,
            'currency' => 'USD',
            'paid_at' => now(),
            'payment_method' => 'Credit Card',
            'status' => 'paid'
        ]);

        Invoice::create([
            'booking_id' => 2,
            'guest_id' => 2,
            'amount' => 600.00,
            'currency' => 'USD',
            'paid_at' => null,
            'payment_method' => null,
            'status' => 'unpaid'
        ]);
    }
}
