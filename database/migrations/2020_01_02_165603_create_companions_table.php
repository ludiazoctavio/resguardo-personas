<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name'); //nombres
            $table->string('last_name_1'); //primer apellido
            $table->string('last_name_2')->default(null)->nullable(true); //segundo apellido
            $table->unsignedInteger('companionable_id');
            $table->string('companionable_type');
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
        Schema::dropIfExists('companions');
    }
}
