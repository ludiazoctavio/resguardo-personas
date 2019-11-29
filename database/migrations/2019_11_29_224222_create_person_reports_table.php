<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name'); //nombres
            $table->string('last_name_1'); //primer apellido
            $table->string('last_name_2'); //segundo apellido
            $table->integer('age')->default(null)->nullable(true); //edad
            $table->unsignedInteger('gender_id')->default(null)->nullable(true); //genero
            $table->foreign('gender_id')->references('id')->on('genders')->onUpdate('cascade');
            $table->unsignedInteger('nationality_id')->default(null)->nullable(true); //nacionalidad
            $table->foreign('nationality_id')->references('id')->on('nationalities')->onUpdate('cascade');
            $table->unsignedInteger('person_id');
            $table->foreign('person_id')->references('id')->on('people')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('person_reports');
    }
}
