<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('manufacturer_name');
            $table->string('tyre_pattern');
            $table->string('fuel_efficiency');
            $table->string('wet_grip');
            $table->string('road_noise');
            $table->string('size');
            $table->string('tyre_type');
            $table->string('season');
            $table->decimal('price', 8, 2); // Example: 9999.99
            $table->boolean('budget_tyres')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
