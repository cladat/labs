<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('carousel_text');
            $table->string('carousel_logo');
            $table->string('projects_title');
            $table->text('projects_text1');
            $table->text('projects_text2');
            $table->string('clients_title');
            $table->string('services_title');
            $table->string('team_title');
            $table->string('page_services_title1');
            $table->string('page_services_title2');
            $table->string('contact_title');
            $table->string('contact_description');
            $table->string('contact_company');
            $table->string('contact_address');
            $table->string('contact_phone');
            $table->string('contact_email');
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
        Schema::dropIfExists('contents');
    }
}
