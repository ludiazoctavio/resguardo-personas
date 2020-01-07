<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticularSignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('particular_signs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('signal_type_id')->default(null)->nullable(true); //edad
            $table->foreign('signal_type_id')->references('id')->on('signal_types')->onUpdate('cascade');
            $table->unsignedInteger('body_part_id')->default(null)->nullable(true); //Parte del cuerpo
            $table->foreign('body_part_id')->references('id')->on('body_parts')->onUpdate('cascade');
            $table->unsignedInteger('size_id')->default(null)->nullable(true); //edad
            $table->foreign('size_id')->references('id')->on('sizes')->onUpdate('cascade');
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
        Schema::dropIfExists('particular_signs');
    }
}
