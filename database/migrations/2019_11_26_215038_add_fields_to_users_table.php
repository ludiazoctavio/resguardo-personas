<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name_1')->after('name')->nullable(); //primer apellido
            $table->string('last_name_2')->after('last_name_1')->nullable(); //segundo apellido
            $table->string('position')->after('last_name_2')->nullable(); //Cargo
            $table->unsignedInteger('phone')->nullable(); //Teléfono
            $table->unsignedInteger('phone_extension')->nullable(); //Teléfono extensión
            $table->unsignedInteger('dependence')->nullable(); //Dependencia
            $table->unsignedInteger('ascription')->nullable(); //Área de adscripción
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['last_name_1','last_name_2','position','phone','phone_extension','dependence','ascription','address']);
        });
    }
}
