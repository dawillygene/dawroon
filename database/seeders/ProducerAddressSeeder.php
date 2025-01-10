<?php

namespace Database\Seeders;

use App\Models\ProducerAddress;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProducerAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProducerAddress::factory()->count(20)->create();
    }
}
