<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_states', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code',20)->unique(); //clave
            $table->string('name',200)->unique(); //nombre 
            $table->string('abbreviation',20)->unique(); //clave
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
        Schema::dropIfExists('address_states');
    }
}
