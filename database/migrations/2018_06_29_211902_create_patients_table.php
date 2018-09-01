<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('arrival');
            $table->string('disposition');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('educational_background');
            $table->string('occupation');
            $table->string('in_case_of_emergency"');
            $table->string('plan');
            $table->string('current');
            $table->string('previous');
            $table->string('vss');
            $table->string('iud');
            $table->string('pill');
            $table->string('dmpa');
            $table->string('nfp');
            $table->string('lam');
            $table->string('condom');
            $table->string('other');
            $table->integer('age');
            $table->string('contactNumber');
            $table->string('address');
            $table->date('birthDate');
            $table->unsignedInteger('staffID');
            $table->foreign('staffID')
            ->references('id')->on('staff')
            ->onDelete('cascade');
            $table->unsignedInteger('docID')->nullable();
            $table->foreign('docID')
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
        Schema::dropIfExists('patients');
    }
}
