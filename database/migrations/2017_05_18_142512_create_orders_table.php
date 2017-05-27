<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('no_id');
            $table->string('type_id');
            $table->bigInteger('no_ticket')->unsigned();
            $table->bigInteger('total_ticket');
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('handphone');
            $table->string('gender');
            $table->string('password');
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
        Schema::drop('orders');
    }
}
