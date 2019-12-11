<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code',20); //clave
            $table->string('name',200); //nombre
            $table->unsignedInteger('state_id');
            $table->foreign('state_id')->references('id')->on('address_states')->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('inactive')->default(false);; //inactiva
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
        Schema::dropIfExists('address_cities');
    }
}
