<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ConciergeRequest;

class ConciergeRequestsSeeder extends Seeder
{
    public function run(): void
    {
        ConciergeRequest::create([
            'guest_id' => 1,
            'booking_id' => 1,
            'subject' => 'Extra Towels',
            'description' => 'Please bring extra towels to the room',
            'status' => 'open',
            'priority' => 'low'
        ]);

        ConciergeRequest::create([
            'guest_id' => 2,
            'booking_id' => 2,
            'subject' => 'Taxi Reservation',
            'description' => 'Need a taxi at 7 AM tomorrow',
            'status' => 'in_progress',
            'priority' => 'high'
        ]);
    }
}
