<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_meta', function(Blueprint $table)
		{
            $table->id();
			$table->foreignId('user_id');
			$table->string('option', 100);
			$table->text('value')->nullable();
			$table->string('mode', 20)->nullable();

            $table->foreign('user_id')->references('id')->on('users');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_meta');
	}

}
