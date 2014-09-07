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
            $table->integer('category_id_1');
            $table->integer('category_count_1');
            $table->integer('category_id_2');
            $table->integer('category_count_2');
            $table->integer('category_id_3');
            $table->integer('category_count_3');
            $table->integer('category_id_4');
            $table->integer('category_count_4');
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
