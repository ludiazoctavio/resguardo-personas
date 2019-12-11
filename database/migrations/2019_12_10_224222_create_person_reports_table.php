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
            $table->unsignedInteger('age_id')->default(null)->nullable(true); //edad
            $table->foreign('age_id')->references('id')->on('ages')->onUpdate('cascade');
            $table->unsignedInteger('gender_id')->default(null)->nullable(true); //genero
            $table->foreign('gender_id')->references('id')->on('genders')->onUpdate('cascade');
            $table->unsignedInteger('nationality_id')->default(null)->nullable(true); //nacionalidad
            $table->foreign('nationality_id')->references('id')->on('nationalities')->onUpdate('cascade');
            $table->unsignedInteger('identification_type_id')->default(null)->nullable(true); //tipo de identificacion
            $table->foreign('identification_type_id')->references('id')->on('identification_types')->onUpdate('cascade');
            $table->string('number_identification');
            $table->string('image_identification');
            $table->unsignedInteger('person_id');
            $table->foreign('person_id')->references('id')->on('people')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('address_id')->default(null)->nullable(true); //dirección
            $table->foreign('address_id')->references('id')->on('addresses')->onUpdate('cascade');
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
