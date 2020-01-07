<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('accessory_type_id')->default(null)->nullable(true); //Tipo de accesorio puesto
            $table->foreign('accessory_type_id')->references('id')->on('accessory_types')->onUpdate('cascade');
            $table->unsignedInteger('color_1_id')->default(null)->nullable(true); //color 1
            $table->foreign('color_1_id')->references('id')->on('colors')->onUpdate('cascade');
            $table->unsignedInteger('color_2_id')->default(null)->nullable(true); //color 2
            $table->foreign('color_2_id')->references('id')->on('colors')->onUpdate('cascade');
            $table->unsignedInteger('body_part_id')->default(null)->nullable(true); //Parte del cuerpo
            $table->foreign('body_part_id')->references('id')->on('body_parts')->onUpdate('cascade');
            $table->text('description')->default(null)->nullable(true);
            $table->unsignedInteger('person_id'); // persona
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
        Schema::dropIfExists('accessories');
    }
}
