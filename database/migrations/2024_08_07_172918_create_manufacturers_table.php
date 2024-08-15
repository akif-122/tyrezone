<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Manufacturer name
            $table->string('image')->nullable(); // Manufacturer image URL or path (nullable)
            $table->text('excerpt')->nullable(); // Short description or excerpt (nullable)
            $table->text('description')->nullable(); // Detailed description (nullable)
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manufacturers');
    }
}
