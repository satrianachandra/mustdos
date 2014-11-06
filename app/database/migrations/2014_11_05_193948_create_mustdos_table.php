<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMustdosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mustdos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->double('completeness');
			$table->timestamps();
		});

		Schema::create('entries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('mustdo_id')->unsigned();
			$table->foreign('mustdo_id')->references('id')->on('mustdos')->onDelete('cascade');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('entry_id')->unsigned();
			$table->foreign('entry_id')->references('id')->on('entries')->onDelete('cascade');
			$table->string('name');
			$table->boolean('completed');
			$table->text('description');
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
		Schema::drop('items');
		Schema::drop('entries');
		Schema::drop('mustdos');
	}

}
