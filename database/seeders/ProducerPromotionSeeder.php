<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProducerPromotion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProducerPromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProducerPromotion::factory()->count(20)->create();
    }
}
