<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('employees', function($table)
        {
            $table->increments('id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('responsibility');
            $table->string('employement_date');
            $table->string('birth_date');
            $table->string('location');
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
        Schema::drop('employees');
	}

}
