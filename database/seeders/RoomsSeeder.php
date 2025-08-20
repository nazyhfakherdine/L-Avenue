<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomsSeeder extends Seeder
{
    public function run(): void
    {
        Room::create([
            'number' => '101',
            'type' => 'Single',
            'rate' => 100.00,
            'status' => 'available',
            'capacity' => 1,
            'description' => 'Single room with one bed'
        ]);

        Room::create([
            'number' => '102',
            'type' => 'Double',
            'rate' => 150.00,
            'status' => 'occupied',
            'capacity' => 2,
            'description' => 'Double room with two beds'
        ]);
    }
}
