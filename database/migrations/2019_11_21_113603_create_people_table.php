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
            $table->unsignedInteger('age_range')->default(null)->nullable(true); //rango de esda
            $table->unsignedInteger('gender')->default(null)->nullable(true); //genero
            $table->unsignedInteger('nationality')->default(null)->nullable(true); //nacionalidad
            $table->unsignedInteger('disability')->default(null)->nullable(true); //discapacidad
            $table->unsignedInteger('priority'); //semaforo prioridad
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
