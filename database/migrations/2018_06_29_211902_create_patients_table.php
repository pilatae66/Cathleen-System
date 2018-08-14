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
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('civilStatus');
            $table->string('rr');
            $table->string('wt');
            $table->string('ht');
            $table->string('bp');
            $table->string('temp');
            $table->string('philNumber');
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
