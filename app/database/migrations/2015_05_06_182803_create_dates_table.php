<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('date')->nullable();
			$table->string('country')->nullable();
			$table->string('city')->nullable();
			$table->string('location')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dates');
	}

}
