<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControversiesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::enableForeignKeyConstraints();
        Schema::create('controversies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person')->unsigned();
            $table->foreign('person')->references('id')
              ->on('topics')
              ->onUpdate('cascade')
              ->onDelete('cascade');
            $table->integer('candidate_id')->unsigned();
            $table->foreign('candidate_id')->references('id')
              ->on('person')
              ->onUpdate('cascade')
              ->onDelete('cascade');
            $table->string('value');
            $table->string('source');
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
