<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('text');
            $table->text('comms')->nullable();
            $table->integer('day');
            $table->string('year');
            $table->string('image');
            $table->string('validate')->default(0);
            $table->unsignedInteger('category_id')->default(1);
            $table ->foreign('category_id')->references('id')->on('categories');
            $table->unsignedInteger('profil_id');
            $table ->foreign('profil_id')->references('id')->on('profils');
            $table->unsignedInteger('user_id');
            $table ->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('articles');
    }
}
