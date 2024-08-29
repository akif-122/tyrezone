<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('size', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing
            $table->integer('width'); // Width attribute as integer
            $table->integer('profile'); // Profile attribute as integer
            $table->string('rim_size'); // Rim size attribute as string
            $table->string('speed'); // Speed attribute as string
            $table->unsignedBigInteger('product_id')->nullable(); // Foreign key reference to the product

            // Add foreign key constraint if there is a products table
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('size');
    }
};