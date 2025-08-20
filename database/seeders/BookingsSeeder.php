<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingsSeeder extends Seeder
{
    public function run(): void
    {
        Booking::create([
            'guest_id' => 1,
            'room_id' => 1,
            'checkin' => now(),
            'checkout' => now()->addDays(3),
            'status' => 'confirmed',
            'total_amount' => 300.00
        ]);

        Booking::create([
            'guest_id' => 2,
            'room_id' => 2,
            'checkin' => now()->addDay(),
            'checkout' => now()->addDays(5),
            'status' => 'pending',
            'total_amount' => 600.00
        ]);
    }
}
