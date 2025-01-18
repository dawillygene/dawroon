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


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            // CategorySeeder::class, // No dependencies
            // ProducerSeeder::class, // Depends on categories
            // AddressSeeder::class, // No dependencies
            // DeliveryAreaSeeder::class, // No dependencies
            // DeliveryPersonSeeder::class, // No dependencies
            // DeliveryVehicleSeeder::class, // No dependencies
            // ProductSeeder::class, // Depends on producers and categories
            // OrderSeeder::class, // Depends on users and addresses
            OrderItemSeeder::class, // Depends on orders and products
            // DeliverieSeeder::class, // Depends on orders, delivery_persons, and delivery_vehicles
            // PaymentSeeder::class, // Depends on orders
            // ProducerAddressSeeder::class, // Depends on producers
            // UserAddressSeeder::class, // Depends on users and addresses
            // PaymentMethodSeeder::class, // Depends on users
            // ProducerPaymentSeeder::class, // Depends on producers
            // FeeSeeder::class, // Depends on producers and orders
            // ProducerPromotionSeeder::class, // Depends on producers
            // UserPromotionSeeder::class, // Depends on users and producer_promotions
            // NotificationSeeder::class, // Depends on users
            // SupportTicketSeeder::class, // Depends on users
            // AnalyticsDataSeeder::class, // Depends on users
            // InventorySeeder::class, // Depends on products
            // DeliveryReviewSeeder::class, // Depends on deliveries and users
            // ProductReviewSeeder::class, // Depends on products and users
        ]);

        
    }
}
