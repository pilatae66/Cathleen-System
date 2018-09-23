<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdultPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adult_patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->date('arrival');
            $table->time('disposition');
            $table->date('dob');
            $table->string('occupation');
            $table->string('educational_background');
            $table->string('in_case_of_emergency');
            $table->integer('age');
            $table->string('gender');
            $table->string('civil_status');
            $table->mediumText('address');
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
        Schema::dropIfExists('adult_patients');
    }
}
