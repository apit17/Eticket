<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('payment_id');
            $table->bigInteger('no_id');
            $table->string('bank_transfer');
            $table->string('total_transfer');
            $table->string('owner_rekening');
            $table->date('transfer_date');
            $table->bigInteger('ttl_price');
            $table->string('status_payment');
            $table->string('payment_prove');
            $table->string('note');
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
        Schema::drop('transactions');
    }
}
