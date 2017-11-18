<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('sms', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('filename', 190);
			$table->string('nick_name', 190);
			$table->string('full_name', 190);
			$table->string('mobile', 190);
			$table->timestamp('dob');
			
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
		//
	}

}
