<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentRoutineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('payment_routines', function($table)
        {
            $table->increments('id');
            $table->integer('invoice_id');
            $table->integer('amount');
            $table->integer('officer');
            $table->integer('date_payed');
            $table->string('payed_through');
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
		Schema::drop('payment_routines');
	}

}
