<?php

namespace Database\Seeders;

use App\Models\DeliveryReview;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeliveryReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeliveryReview::factory()->count(50)->create();
    }
}
