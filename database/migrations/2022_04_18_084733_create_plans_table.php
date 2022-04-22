<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('sku')->nullable();
            $table->string('slug')->nullable();
            $table->string('keyword')->nullable();
            $table->string('video')->nullable();
            $table->string('pdf')->nullable();
            $table->string('plan_image')->nullable();
            $table->string('elevation_image')->nullable();
            $table->decimal('price')->nullable();
            $table->decimal('sell_price')->nullable();
            $table->decimal('width')->nullable();
            $table->decimal('height')->nullable();
            $table->enum('vastu', ['yes','no'])->nullable();
            $table->enum('faces', ['east','west','north','south'])->nullable();
            $table->enum('parking', ['yes','no'])->nullable();
            $table->enum('bhk', ['1bhk','2bhk','3bhk','4bhk'])->nullable();
            $table->enum('floor', ['g+1','g+2','g+3','g+4'])->nullable();
            $table->boolean('swiming_pool')->default('0');
            $table->boolean('plot')->default('0');
            $table->boolean('column_placement')->default('0');
            $table->boolean('door_size')->default('0');
            $table->boolean('window_size')->default('0');
            $table->integer('like')->nullable();
            $table->integer('rating')->nullable();
            $table->boolean('ventilation_size')->default('0');
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->boolean('activated')->default('0');
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
        Schema::dropIfExists('plans');
    }
}
