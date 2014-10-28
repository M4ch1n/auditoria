<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		if(!Schema::hasTable('employees') ) {
			Schema::create('employees', function($table) {
				$table->increments('id');
				$table->string('name');
				$table->string('last_name_f');
				$table->string('last_name_m');
				$table->string('area');
				$table->string('position');
				$table->integer('work_years');
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
		Schema::drop('employees');
	}

}
