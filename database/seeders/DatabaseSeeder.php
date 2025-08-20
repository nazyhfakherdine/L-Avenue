<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $this->call([
        GuestsSeeder::class,
        RoomsSeeder::class,
        AmenitiesSeeder::class,
        BookingsSeeder::class,
        ConciergeRequestsSeeder::class,
        InvoicesSeeder::class,
    ]);
    }
}
