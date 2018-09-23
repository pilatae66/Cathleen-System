<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrenatalCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prenatal_cares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_name');
            $table->string('client_number');
            $table->date('date');
            $table->time('time');
            $table->string('blood_pressure');
            $table->integer('temperature');
            $table->integer('weight');
            $table->string('breast');
            $table->string('chest');
            $table->string('pelvic');
            $table->string('unrinary_tract');
            $table->string('assessment');
            $table->string('referal');
            $table->string('return_visit');
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
        Schema::dropIfExists('prenatal_cares');
    }
}
