<?php

namespace Database\Seeders;

use App\Models\ParkingLot;
use Illuminate\Database\Seeder;

class ParkingLotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            ParkingLot::create([
                'name' => 'Parking Lot ' . $i + 1,
                'is_parked' => false,
            ]);
        }
    }
}
