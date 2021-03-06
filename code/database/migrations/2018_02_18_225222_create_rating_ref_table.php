<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRatingRefTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rating_ref', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('rating_id');
			$table->integer('ticket_id');
			$table->integer('thread_id');
			$table->integer('article_id')->nullable();
			$table->integer('rating_value');
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
		Schema::drop('rating_ref');
	}

}
