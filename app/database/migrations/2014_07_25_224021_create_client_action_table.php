<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientActionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('client_actions', function($table)
        {
            $table->increments('id');
            $table->string('client_id');
            $table->boolean('checkIn');
            $table->boolean('checkOut');
            $table->boolean('postpone');
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
        Schema::drop('client_actions');
	}

}
