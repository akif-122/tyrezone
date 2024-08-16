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
$table->unsignedBigInteger('user_id'); // FK to users table
$table->unsignedBigInteger('checkout_id'); // FK to checkout
$table->decimal('price', 8, 2);
$table->string('season');
$table->string('manufacturer_name');
$table->string('size');
$table->string('image')->nullable();
$table->timestamps();

// Foreign Key Constraints
$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
$table->foreign('checkout_id')->references('id')->on('checkout')->onDelete('cascade');
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