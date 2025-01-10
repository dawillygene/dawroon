<?php

namespace Database\Seeders;

use App\Models\Deliverie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class DeliverieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Deliverie::factory()->count(20)->create();
    }
}
