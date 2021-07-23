<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('catalog_meta', function(Blueprint $table)
		{
            $table->id();
			$table->foreignId('catalog_id');
			$table->string('option', 100);
			$table->text('value')->nullable();
			$table->string('mode', 20)->nullable();

            $table->foreign('catalog_id')->references('id')->on('catalog');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('catalog_meta');
	}

}
