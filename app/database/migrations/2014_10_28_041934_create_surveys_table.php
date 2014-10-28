<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		if(!Schema::hasTable('surveys') ) {
			Schema::create('surveys', function($table) {
				$table->increments('id');
				$table->integer('id_personal_data')->unsigned();
				$table->foreign('id_personal_data')->references('id')->on('personal_data');
				$table->integer('id_question')->unsigned();
				$table->foreign('id_question')->references('id')->on('questions');
				$table->integer('id_answer')->unsigned();
				$table->foreign('id_answer')->references('id')->on('answers');

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
		Schema::drop('surveys');
	}

}
