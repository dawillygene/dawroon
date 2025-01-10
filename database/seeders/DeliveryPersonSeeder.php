<?php

namespace Database\Seeders;

use App\Models\DeliveryPerson;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeliveryPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeliveryPerson::factory()->count(20)->create();
    }
}
