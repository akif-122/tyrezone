<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('f_name'); // User's first name
            $table->string('last_name'); // User's last name
            $table->string('email')->unique(); // User's email, must be unique
            $table->integer('phone'); // User's phone number
            $table->string('address')->nullable(); // User's address, nullable
            $table->string('city')->nullable(); // User's city, nullable
            $table->string('country')->nullable(); // User's country, nullable
            $table->integer('postcode')->nullable(); // User's postcode, nullable
            $table->string('company_name')->nullable(); // User's company name, nullable
            $table->string('company_phone')->nullable(); // User's company phone, nullable
            $table->string('password'); // User's password

            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
