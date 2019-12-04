<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('street'); //Calle
            $table->string('number'); //Numerio exterior
            $table->string('outdoor_number'); //Numero interior
            $table->string('pc'); //Código postal
            $table->string('suburb'); //Colonia
            $table->unsignedInteger('city_id')->default(null)->nullable(true); //municipio
            $table->foreign('city_id')->references('id')->on('address_cities')->onUpdate('cascade');
            $table->unsignedInteger('state_id')->default(null)->nullable(true); //municipio
            $table->foreign('state_id')->references('id')->on('address_states')->onUpdate('cascade');
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
        Schema::dropIfExists('addresses');
    }
}
