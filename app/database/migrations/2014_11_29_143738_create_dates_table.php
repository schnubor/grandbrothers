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
			$table->string('title');
			$table->string('author');
			$table->string('location')->nullable();
			$table->string('date')->nullable();
			$table->string('price')->nullable();
			$table->text('body')->nullable();
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
		Schema::drop('dates');
	}

}
