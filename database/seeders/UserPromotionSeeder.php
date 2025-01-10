<?php

namespace Database\Seeders;

use App\Models\UserPromotion;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserPromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserPromotion::factory()->count(50)->create();
    }
}
