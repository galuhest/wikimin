<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimoniesTable extends Migration
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
        Schema::create('testimonies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')->references('id')
              ->on('person')
              ->onUpdate('cascade')
              ->onDelete('cascade');
            $table->integer('year_given');
            $table->string('voucher',255);
            $table->text('testimony')->nullable();
            $table->string('source');
            $table->text('source_link');
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
        Schema::drop('testimonies');
    }
}
