<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->date('arrival');
            $table->time('disposition');
            $table->integer('child_no');
            $table->string('gender');
            $table->date('date_first_seen');
            $table->date('dob');
            $table->integer('birth_weight');
            $table->string('place_of_delivery');
            $table->date('registry_date');
            $table->mediumText('address');
            $table->string('mother_name');
            $table->string('mother_educational_level');
            $table->string('mother_occupation');
            $table->string('father_name');
            $table->string('father_educational_level');
            $table->string('father_occupation');
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
        Schema::dropIfExists('child_patients');
    }
}
