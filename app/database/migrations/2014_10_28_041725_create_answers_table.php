<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		if(!Schema::hasTable('answers') ) {
			Schema::create('answers', function($table) {
				$table->increments('id');
				$table->integer('id_question')->unsigned();
				$table->foreign('id_question')->references('id')->on('questions');
				$table->string('answer');
				$table->integer('rating');
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('answers');
	}



}
