<?php

namespace Database\Seeders;

use App\Models\DeliveryVehicle;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeliveryVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeliveryVehicle::factory()->count(20)->create();
    }
}
