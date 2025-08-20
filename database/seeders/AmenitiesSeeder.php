<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Amenity;

class AmenitiesSeeder extends Seeder
{
    public function run(): void
    {
        Amenity::create([
            'name' => 'WiFi',
            'description' => 'High speed internet access',
            'price' => 10.00
        ]);

        Amenity::create([
            'name' => 'Breakfast',
            'description' => 'Daily continental breakfast',
            'price' => 15.00
        ]);
    }
}
