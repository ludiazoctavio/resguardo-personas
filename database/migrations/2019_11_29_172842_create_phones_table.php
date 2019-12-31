<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone'); //Teléfono celular
            $table->unsignedInteger('phone_type_id')->default(null)->nullable(true); //circunstancia
            $table->foreign('phone_type_id')->references('id')->on('phone_types')->onUpdate('cascade');
            $table->unsignedInteger('phoneable_id');
            $table->string('phoneable_type');
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
        Schema::dropIfExists('phones');
    }
}
