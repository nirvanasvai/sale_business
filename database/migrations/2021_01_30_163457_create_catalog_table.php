<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->comment('Автор')->nullable();
            $table->string('title')->comment('Название');
            $table->string('price')->comment('цена');
            $table->integer('status_1')->nullable();
            $table->integer('status_2')->nullable();
            $table->integer('status_3')->nullable();
            $table->string('slug')->unique()->comment('линк. формируется на основе названия');
            $table->string('image')->default('default.png')->comment('Главное изображение');
            $table->text('body')->comment('Описание');
            $table->integer('view_count')->default(0)->comment('Просмотров');
            $table->boolean('archive')->default(false)->comment('В архиве');
            $table->boolean('is_approved')->default(false)->comment('Одобрен модератором');

            $table->foreignId('city_id')->comment('Город');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog');
    }
}
