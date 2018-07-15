<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('diagnosis');
            $table->string('treatment');
            $table->string('status');
            $table->date('date');
            $table->unsignedInteger('patientID');
            $table->foreign('patientID')
            ->references('id')->on('patients')
            ->onDelete('cascade');
            $table->unsignedInteger('doctorID');
            $table->foreign('doctorID')
            ->references('id')->on('doctors')
            ->onDelete('cascade');
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
        Schema::dropIfExists('health_records');
    }
}
