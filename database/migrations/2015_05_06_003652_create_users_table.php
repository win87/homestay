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
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email')->unique;
			$table->string('name');
			$table->string('password');
			$table->boolean('is_admin')->default(0);
			$table->integer('user_type')->unsigned();
			// $table->boolean('delete')->default(0);
			$table->string('photo');
			$table->rememberToken();
			$table->timestamps();
			// $table->string('phone')->default('');
			// $table->string('sex')->default('');
			// $table->string('pro_class')->default('');
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
