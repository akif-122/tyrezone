<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTyrePatternsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tyre_patterns', function (Blueprint $table) {
            $table->id(); // Auto-incrementing id (primary key)
            $table->string('name_of_manufacturer'); // Name of manufacturer
            $table->string('type_of_pattern'); // Type of tyre pattern
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tyre_patterns');
    }
}
