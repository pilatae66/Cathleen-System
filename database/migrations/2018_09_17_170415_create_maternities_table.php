<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaternitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maternities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('blood_pressure');
            $table->string('pulse_rate');
            $table->integer('weight');
            $table->integer('height');
            $table->integer('temperature');
            $table->string('conjunctiva');
            $table->string('neck');
            $table->string('breast');
            $table->string('heart_and_lungs');
            $table->string('pelvic');
            $table->string('immunization');
            $table->string('assessment');
            $table->string('referal');
            $table->string('return_visit');
            $table->unsignedInteger('patient_id');
            $table->foreign('patient_id')
            ->references('id')->on('adult_patients')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('maternities');
    }
}
