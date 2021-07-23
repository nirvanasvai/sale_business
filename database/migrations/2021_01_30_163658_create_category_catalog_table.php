<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryCatalogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_catalog', function (Blueprint $table) {
            $table->id();
            $table->foreignId('catalog_id');
            $table->foreignId('category_id');
            $table->timestamps();

//            $table->foreign('catalog_id')->references('id')->on('catalog');
//            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_catalog');
    }
}
