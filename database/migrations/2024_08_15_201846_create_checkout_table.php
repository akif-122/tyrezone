<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('checkout', function (Blueprint $table) {
$table->id();
$table->string('first_name');
$table->string('last_name');
$table->string('email');
$table->string('telephone');
$table->string('reg_no');
$table->string('post_code');
$table->string('company')->nullable();
$table->text('address');
$table->string('city');
$table->string('country');
$table->text('comments')->nullable();
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
Schema::dropIfExists('orders');
}
}