<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Categories
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('category_id');
            $table->string('name');
            $table->text('description');
        });

        // Producers
        Schema::create('producers', function (Blueprint $table) {
            $table->bigIncrements('producer_id');
            $table->string('business_name');
            $table->string('contact_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone_number')->unique();
            $table->timestamp('registration_date');
        });

        // Addresses
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('address_id');
            $table->string('address_line1');
            $table->string('address_line2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');
        });

        // DeliveryAreas
        Schema::create('delivery_areas', function (Blueprint $table) {
            $table->bigIncrements('area_id');
            $table->string('name');
            $table->text('coverage_area');
            $table->decimal('delivery_fee', 5, 2);
        });

        // DeliveryPersons
        Schema::create('delivery_persons', function (Blueprint $table) {
            $table->bigIncrements('delivery_person_id');
            $table->string('name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('status');
        });

        // DeliveryVehicles
        Schema::create('delivery_vehicles', function (Blueprint $table) {
            $table->bigIncrements('vehicle_id');
            $table->string('vehicle_type');
            $table->string('license_plate');
            $table->string('status');
        });

        // Products
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->unsignedBigInteger('producer_id');
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->string('image_url')->nullable();
            $table->integer('stock_quantity');
            $table->foreign('producer_id')->references('producer_id')->on('producers');
            $table->foreign('category_id')->references('category_id')->on('categories');
        });

        // Orders
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->unsignedBigInteger('id');
            $table->timestamp('order_date');
            $table->decimal('total_price', 8, 2);
            $table->string('status');
            $table->string('delivery_address');
            $table->string('delivery_slot');
            $table->foreign('id')->references('id')->on('users');
        });

        // OrderItems
        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('order_item_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->decimal('price_at_time_of_order', 8, 2);
            $table->foreign('order_id')->references('order_id')->on('orders');
            $table->foreign('product_id')->references('product_id')->on('products');
        });

        // Deliveries
        Schema::create('deliveries', function (Blueprint $table) {
            $table->bigIncrements('delivery_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('delivery_person_id')->nullable();
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->timestamp('estimated_delivery_time')->nullable();
            $table->timestamp('actual_delivery_time')->nullable();
            $table->string('status');
            $table->foreign('order_id')->references('order_id')->on('orders');
            $table->foreign('delivery_person_id')->references('delivery_person_id')->on('delivery_persons');
            $table->foreign('vehicle_id')->references('vehicle_id')->on('delivery_vehicles');
        });

        // Payments
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('payment_id');
            $table->unsignedBigInteger('order_id');
            $table->string('payment_method');
            $table->string('transaction_id')->unique();
            $table->decimal('amount', 8, 2);
            $table->timestamp('payment_date');
            $table->foreign('order_id')->references('order_id')->on('orders');
        });

        // ProductReviews
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->bigIncrements('review_id');
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('product_id');
            $table->integer('rating');
            $table->text('review_text');
            $table->timestamp('review_date');
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('product_id')->references('product_id')->on('products');
        });

        // DeliveryReviews
        Schema::create('delivery_reviews', function (Blueprint $table) {
            $table->bigIncrements('review_id');
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('delivery_id');
            $table->integer('rating');
            $table->text('review_text');
            $table->timestamp('review_date');
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('delivery_id')->references('delivery_id')->on('deliveries');
        });

        // Inventory
        Schema::create('inventory', function (Blueprint $table) {
            $table->bigIncrements('inventory_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->integer('reorder_level');
            $table->timestamp('last_updated');
            $table->foreign('product_id')->references('product_id')->on('products');
        });

        // ProducerAddresses
        Schema::create('producer_addresses', function (Blueprint $table) {
            $table->bigIncrements('address_id');
            $table->unsignedBigInteger('producer_id');
            $table->string('address_line1');
            $table->string('address_line2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');
            $table->foreign('producer_id')->references('producer_id')->on('producers');
        });

        // UserAddresses
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->bigIncrements('user_address_id');
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('address_id');
            $table->boolean('is_default');
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('address_id')->references('address_id')->on('addresses');
        });

        // PaymentMethods
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->bigIncrements('payment_method_id');
            $table->unsignedBigInteger('id');
            $table->string('payment_type');
            $table->string('card_number');
            $table->string('expiration_date');
            $table->string('cvv');
            $table->boolean('default_payment');
            $table->foreign('id')->references('id')->on('users');
        });

        // ProducerPayments
        Schema::create('producer_payments', function (Blueprint $table) {
            $table->bigIncrements('payment_id');
            $table->unsignedBigInteger('producer_id');
            $table->string('payment_type');
            $table->text('account_details');
            $table->boolean('default_payment');
            $table->foreign('producer_id')->references('producer_id')->on('producers');
        });

        // Fees
        Schema::create('fees', function (Blueprint $table) {
            $table->bigIncrements('fee_id');
            $table->unsignedBigInteger('producer_id');
            $table->unsignedBigInteger('order_id');
            $table->decimal('fee_amount', 5, 2);
            $table->timestamp('fee_date');
            $table->foreign('producer_id')->references('producer_id')->on('producers');
            $table->foreign('order_id')->references('order_id')->on('orders');
        });

        // ProducerPromotions
        Schema::create('producer_promotions', function (Blueprint $table) {
            $table->bigIncrements('promotion_id');
            $table->string('name');
            $table->text('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('discount_type');
            $table->decimal('discount_value', 5, 2);
        });

        // UserPromotions
        Schema::create('user_promotions', function (Blueprint $table) {
            $table->bigIncrements('user_promotion_id');
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('promotion_id');
            $table->unsignedBigInteger('applied_to_order_id')->nullable();
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('promotion_id')->references('promotion_id')->on('producer_promotions');
            $table->foreign('applied_to_order_id')->references('order_id')->on('orders')->nullable();
        });

        // Notifications
        Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('notification_id');
            $table->unsignedBigInteger('recipient_id');
            $table->string('recipient_type');
            $table->text('message');
            $table->timestamp('sent_date');
            $table->boolean('read_status');
        });

        // SupportTickets
        Schema::create('support_tickets', function (Blueprint $table) {
            $table->bigIncrements('ticket_id');
            $table->unsignedBigInteger('id');
            $table->text('issue_description');
            $table->string('status');
            $table->timestamp('created_date');
            $table->timestamp('resolved_date')->nullable();
            $table->foreign('id')->references('id')->on('users');
        });

        // AnalyticsData
        Schema::create('analytics_data', function (Blueprint $table) {
            $table->bigIncrements('analytics_id');
            $table->date('date');
            $table->string('metric_type');
            $table->decimal('value', 10, 2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('analytics_data');
        Schema::dropIfExists('support_tickets');
        Schema::dropIfExists('notifications');
        Schema::dropIfExists('user_promotions');
        Schema::dropIfExists('producer_promotions');
        Schema::dropIfExists('fees');
        Schema::dropIfExists('producer_payments');
        Schema::dropIfExists('payment_methods');
        Schema::dropIfExists('user_addresses');
        Schema::dropIfExists('producer_addresses');
        Schema::dropIfExists('inventory');
        Schema::dropIfExists('delivery_reviews');
        Schema::dropIfExists('product_reviews');
        
        Schema::dropIfExists('payments');
        Schema::dropIfExists('deliveries');
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('products');
        Schema::dropIfExists('delivery_vehicles');
        Schema::dropIfExists('delivery_persons');
        Schema::dropIfExists('delivery_areas');
        Schema::dropIfExists('addresses');
        Schema::dropIfExists('users');
        Schema::dropIfExists('producers');
        Schema::dropIfExists('categories');
    }
};
