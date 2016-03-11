<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStuInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stu_infos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('fName');
			$table->string('lName');
			$table->string('gender');
			$table->string('age');
			$table->string('ethnicity');
			$table->string('occupation');
			$table->string('from');
			$table->string('purpose');
			$table->string('phone');
			$table->string('language');
			$table->string('d_country');
			$table->string('d_state');
			$table->string('d_city');
			$table->string('d_address1');
			$table->string('d_address2');
			$table->string('d_zip');
			$table->string('arrival');
			$table->string('departure');
			$table->string('m_price');
			$table->string('d_price');
			$table->string('service');
			$table->text('intro');
			$table->integer('status')->default('1')->unsigned();
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
		Schema::drop('stu_infos');
	}

}
