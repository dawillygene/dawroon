<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ecos_business_type', function (Blueprint $table) {
            $table->id('e_type_id');
            $table->string('e_type_name', 250);
            $table->timestamps();
        });
       
        Schema::create('ecos_business_details', function (Blueprint $table) {
            $table->id('e_business_id');
            $table->string('e_business_name', 255);
            $table->string('e_business_logo', 255)->nullable();
            $table->string('e_business_cover_image', 255)->nullable();
            $table->foreignId('e_type_id')->constrained('ecos_business_type', 'e_type_id');
            $table->string('e_business_location', 250)->nullable();
            $table->timestamps();
        });


        Schema::create('ecos_category', function (Blueprint $table) {
            $table->id('e_category_id');
            $table->string('e_category_name', 250);
            $table->timestamps();
        });

        Schema::create('ecos_business_category', function (Blueprint $table) {
            $table->id('e_b_c_id');
            $table->foreignId('e_business_id')->constrained('ecos_business_details', 'e_business_id');
            $table->foreignId('e_category_id')->constrained('ecos_category', 'e_category_id');
            $table->timestamps();
        });

        Schema::create('ecos_role', function (Blueprint $table) {
            $table->id('e_role_id');
            $table->string('e_role_name', 250);
            $table->timestamps();
        });


        Schema::create('ecos_user_registration', function (Blueprint $table) {
            $table->id('e_reg_id');
            $table->string('e_reg_fullname', 250);
            $table->string('e_reg_email', 255)->unique();
            $table->text('e_password');
            $table->string('e_reg_phone', 15)->nullable();
            $table->timestamps();
        });

        Schema::create('ecos_user_login', function (Blueprint $table) {
            $table->id('e_user_id');
            $table->string('e_user_email', 250)->unique();
            $table->string('e_user_fullname', 255);
            $table->text('e_user_password');
            $table->string('e_user_status', 250)->nullable();
            $table->foreignId('e_role_id')->constrained('ecos_role', 'e_role_id');
            $table->foreignId('e_reg_id')->constrained('ecos_user_registration', 'e_reg_id');
            $table->timestamps();
        });
        
        Schema::create('ecos_delivery_man', function (Blueprint $table) {
            $table->id('e_delivery_id');
            $table->string('e_delivery_fullname', 250);
            $table->string('e_delivery_address', 255)->nullable();
            $table->foreignId('e_business_id')->constrained('ecos_business_details', 'e_business_id');
            $table->string('e_delivery_phone', 15)->nullable();
            $table->timestamps();
        });

    }

   
    public function down(): void
    {
        Schema::dropIfExists('ecos_business_type');
        Schema::dropIfExists('ecos_business_details');
        Schema::dropIfExists('ecos_category');
        Schema::dropIfExists('ecos_business_category');
        Schema::dropIfExists('ecos_role');
        Schema::dropIfExists('ecos_user_registration');
        Schema::dropIfExists('ecos_user_login');
    }
};





















class CreateEcosDeliveryManTable extends Migration
{
    public function up()
    {
       
    }

    public function down()
    {
        Schema::dropIfExists('ecos_delivery_man');
    }
}



class CreateEcosProductTable extends Migration
{
    public function up()
    {
        Schema::create('ecos_product', function (Blueprint $table) {
            $table->id('e_product_id');
            $table->string('e_product_name', 250);
            $table->string('e_product_image', 255)->nullable();
            $table->double('e_product_price');
            $table->foreignId('e_b_c_id')->constrained('ecos_business_category', 'e_b_c_id');
            $table->integer('e_product_qty');
            $table->text('e_product_description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ecos_product');
    }
}


class CreateEcosProductInfoTable extends Migration
{
    public function up()
    {
        Schema::create('ecos_product_info', function (Blueprint $table) {
            $table->id('e_info_id');
            $table->foreignId('e_product_id')->constrained('ecos_product', 'e_product_id');
            $table->string('e_info_image', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ecos_product_info');
    }
}


class CreateEcosCouponsTable extends Migration
{
    public function up()
    {
        Schema::create('ecos_coupons', function (Blueprint $table) {
            $table->id('e_coupons_id');
            $table->foreignId('e_product_id')->constrained('ecos_product', 'e_product_id');
            $table->double('e_coupons_amount');
            $table->string('e_reg_date', 250)->nullable();
            $table->string('e_end_date', 250)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ecos_coupons');
    }
}


class CreateEcosCartTable extends Migration
{
    public function up()
    {
        Schema::create('ecos_cart', function (Blueprint $table) {
            $table->id('e_cart_id');
            $table->foreignId('e_product_id')->constrained('ecos_product', 'e_product_id');
            $table->foreignId('e_reg_id')->constrained('ecos_user_registration', 'e_reg_id');
            $table->integer('e_cart_qty');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ecos_cart');
    }
}


class CreateEcosOrderStatusTable extends Migration
{
    public function up()
    {
        Schema::create('ecos_order_status', function (Blueprint $table) {
            $table->id('e_status_id');
            $table->string('e_status_name', 250);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ecos_order_status');
    }
}


class CreateEcosOrderTable extends Migration
{
    public function up()
    {
        Schema::create('ecos_order', function (Blueprint $table) {
            $table->id('e_order_id');
            $table->string('e_order_date', 250);
            $table->integer('e_order_qty');
            $table->foreignId('e_product_id')->constrained('ecos_product', 'e_product_id');
            $table->integer('e_order_number')->unique();
            $table->string('e_order_address', 250)->nullable();
            $table->foreignId('e_reg_id')->constrained('ecos_user_registration', 'e_reg_id');
            $table->foreignId('e_status_id')->constrained('ecos_order_status', 'e_status_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ecos_order');
    }
}


class CreateEcosDeliveryOrderTable extends Migration
{
    public function up()
    {
        Schema::create('ecos_delivery_order', function (Blueprint $table) {
            $table->id('e_delivery_order_id');
            $table->foreignId('e_order_id')->constrained('ecos_order', 'e_order_id');
            $table->foreignId('e_delivery_id')->constrained('ecos_delivery_man', 'e_delivery_id');
            $table->double('e_total_order');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ecos_delivery_order');
    }
}
