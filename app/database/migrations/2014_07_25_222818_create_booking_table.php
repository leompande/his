<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('bookings', function($table)
        {
            $table->increments('id');
            $table->string('client_name');
            $table->string('number_of_adults');
            $table->string('number_kids');
            $table->string('client_email');
            $table->string('categories');
            $table->string('start_date');
            $table->string('end_date');
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
        Schema::drop('bookings');
	}

}
