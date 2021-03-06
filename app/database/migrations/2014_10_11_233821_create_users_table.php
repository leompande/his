<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

        Schema::create('users', function($table) {
            $table->increments('id');
            $table->string('firstname', 32);
            $table->string('middlename', 32);
            $table->string('lastname', 32);
            $table->string('username', 32);
            $table->string('email', 200)->unique();
            $table->string('password', 64);

            // required for Laravel 4.1.26
            $table->string('remember_token', 100)->nullable();
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
        Schema::drop('users');
	}

}
