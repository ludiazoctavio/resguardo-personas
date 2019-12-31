<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('identification_type_id')->default(null)->nullable(true); //Tipo de documento
            $table->foreign('identification_type_id')->references('id')->on('identification_types')->onUpdate('cascade');
            $table->string('folio')->default(null)->nullable(true);
            $table->unsignedInteger('identificationable_id');
            $table->string('identificationable_type');
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
        Schema::dropIfExists('identifications');
    }
}
