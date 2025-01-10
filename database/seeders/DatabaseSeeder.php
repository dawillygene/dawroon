<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            AnalyticsDataSeeder::class,
            SupportTicketSeeder::class,
            NotificationSeeder::class,
            ProducerPromotionSeeder::class,
            UserPromotionSeeder::class,
            FeeSeeder::class,
            ProducerPaymentSeeder::class,
            PaymentMethodSeeder::class,
            UserAddressSeeder::class,
            ProducerAddressSeeder::class,
            InventorySeeder::class,
            DeliveryReviewSeeder::class,
        ]);

        $this->call([PaymentSeeder::class,]);
        $this->call([OrderSeeder::class, ]);
        $this->call([DeliverieSeeder::class, ]);
        $this->call([OrderItemSeeder::class,]);
        $this->call([ProductSeeder::class,]);
        $this->call([DeliveryVehicleSeeder::class,]);
        $this->call([DeliveryPersonSeeder::class,]);
        $this->call([DeliveryAreaSeeder::class,]);
        $this->call([AddressSeeder::class,]);
        $this->call([ProducerSeeder::class,]);
        $this->call([CategorySeeder::class,]);


    }
}
