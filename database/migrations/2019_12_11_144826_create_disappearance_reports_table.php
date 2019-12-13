<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisappearanceReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disappearance_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->time('time', 0)->default(null)->nullable(true);
            $table->text('description')->default(null)->nullable(true);
            $table->string('cell_phone')->default(null)->nullable(true); //Teléfono celular
            $table->unsignedInteger('circumstance_id')->default(null)->nullable(true); //circunstancia
            $table->foreign('circumstance_id')->references('id')->on('circumstances')->onUpdate('cascade');
            $table->unsignedInteger('person_id');
            $table->foreign('person_id')->references('id')->on('people')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('address_id')->default(null)->nullable(true); //Direccion
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
        Schema::dropIfExists('disappearance_reports');
    }
}
