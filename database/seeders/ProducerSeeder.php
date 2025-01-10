<?php

namespace Database\Seeders;

use App\Models\Producer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producer::factory()->count(20)->create();
    }
}
