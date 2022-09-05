<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriber', function (Blueprint $table) {
            $table->bigIncrements('id_subscriber')->unsigned();
            $table->bigInteger('id_website')->unsigned();
            $table->string('email');
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
        Schema::dropIfExists('subscriber');
    }
}
