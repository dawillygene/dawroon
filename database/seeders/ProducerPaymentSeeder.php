<?php

namespace Database\Seeders;

use App\Models\ProducerPayment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProducerPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProducerPayment::factory()->count(20)->create();
    }
}
