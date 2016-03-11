<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGallery extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gallery', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('room_id')->unsigned()->index(); // conrespond to 'id' on 'users' table
			$table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');	
			$table->string('path');
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
		Schema::drop('gallery');
	}

}
