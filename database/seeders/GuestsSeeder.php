<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guest;

class GuestsSeeder extends Seeder
{
    public function run(): void
    {
        Guest::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+1234567890',
            'address' => '123 Main Street, New York'
        ]);

        Guest::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '+9876543210',
            'address' => '456 Broadway, Los Angeles'
        ]);
    }
}
