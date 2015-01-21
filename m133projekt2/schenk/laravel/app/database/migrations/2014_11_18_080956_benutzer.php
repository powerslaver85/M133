<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Benutzer extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('benutzer', function($table)
		{
			$table->increments('id');
            $table->string('username', 50);
            $table->string('password', 50);
            $table->string('vorname', 50);
            $table->string('nachname', 50);
            $table->string('email', 50);
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
		Schema::drop('benutzer');
	}

}
