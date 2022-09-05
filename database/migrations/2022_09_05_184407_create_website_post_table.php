<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_post', function (Blueprint $table) {
            $table->bigIncrements('id_post')->unsigned();
            $table->bigInteger('id_website')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->timestamps();
            $table->foreign('id_website')->references('id_website')->on('website')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_post');
    }
}
