<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalfAffiliationOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('half_affiliation_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',200); //nombre 
            $table->boolean('inactive')->default(false);; //inactiva
            $table->unsignedInteger('type_id');
            $table->foreign('type_id')->references('id')->on('half_affiliation_types')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('half_affiliation_options');
    }
}
