<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id')->nullable(); 
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode')->nullable();
            $table->string('phone')->nullable();
            
            $table->unsignedBigInteger('coupon_id')->unsigned()->index()->nullable(); 
            $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('cascade');
            $table->string('coupon_code')->nullable();
            $table->string('coupon_value')->nullable();

            $table->string('ref_id')->nullable();
            $table->enum('order_status',['Pending','Shipped','Delivered','Failed','Return'])->default('Pending');
            $table->string('payment_mode')->nullable();
            $table->string('plan_id')->nullable();
            $table->string('plan_name')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('transaction_id')->nullable();
            
            $table->integer('user_id')->nullable();  
            $table->boolean('terms')->nullable();
            $table->decimal('total', 8, 2)->nullable();
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
