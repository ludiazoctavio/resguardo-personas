<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('folio',7)->unique(); //folio
            $table->string('first_name')->default(null)->nullable(true); //nombres
            $table->string('last_name_1')->default(null)->nullable(true); //primer apellido
            $table->string('last_name_2')->default(null)->nullable(true); //segundo apellido
            $table->unsignedInteger('age')->default(null)->nullable(true); //edad
            $table->unsignedInteger('age_range_id')->default(null)->nullable(true); //rango de esda
            $table->foreign('age_range_id')->references('id')->on('age_ranges')->onUpdate('cascade');
            $table->unsignedInteger('gender_id')->default(null)->nullable(true); //genero
            $table->foreign('gender_id')->references('id')->on('genders')->onUpdate('cascade');
            $table->unsignedInteger('nationality_id')->default(null)->nullable(true); //nacionalidad
            $table->foreign('nationality_id')->references('id')->on('nationalities')->onUpdate('cascade');
            $table->unsignedInteger('disability_id')->default(null)->nullable(true); //discapacidad
            $table->foreign('disability_id')->references('id')->on('disabilities')->onUpdate('cascade');
            $table->unsignedInteger('physical_health_id')->default(null)->nullable(true); //discapacidad
            $table->foreign('physical_health_id')->references('id')->on('physical_healths')->onUpdate('cascade');
            $table->unsignedInteger('mental_health_id')->default(null)->nullable(true); //discapacidad
            $table->foreign('mental_health_id')->references('id')->on('mental_healths')->onUpdate('cascade');
            $table->unsignedInteger('occupation_id')->default(null)->nullable(true); //discapacidad
            $table->foreign('occupation_id')->references('id')->on('occupations')->onUpdate('cascade');
            $table->unsignedInteger('scholarship_id')->default(null)->nullable(true); //discapacidad
            $table->foreign('scholarship_id')->references('id')->on('scholarships')->onUpdate('cascade');
            $table->unsignedInteger('marital_status_id')->default(null)->nullable(true); //discapacidad
            $table->foreign('marital_status_id')->references('id')->on('marital_statuses')->onUpdate('cascade');
            $table->unsignedInteger('priority_id'); //semaforo prioridad
            $table->foreign('priority_id')->references('id')->on('priorities')->onUpdate('cascade');
            $table->boolean('confidential'); //confidencial
            $table->boolean('closed'); //cerrado
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
        Schema::dropIfExists('people');
    }
}
