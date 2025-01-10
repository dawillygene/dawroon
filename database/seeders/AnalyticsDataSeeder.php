<?php

namespace Database\Seeders;

use App\Models\AnalyticsData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnalyticsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AnalyticsData::truncate();
        AnalyticsData::factory()->count(50)->create();
    }
}
