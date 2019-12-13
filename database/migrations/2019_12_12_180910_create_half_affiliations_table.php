<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalfAffiliationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('half_affiliations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('person_id');
            $table->foreign('person_id')->references('id')->on('people')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('half_affiliation_type_1_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_1_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_2_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_2_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_3_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_3_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_4_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_4_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_5_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_5_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_6_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_6_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_7_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_7_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_8_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_8_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_9_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_9_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_10_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_10_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_11_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_11_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_12_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_12_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_13_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_13_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_14_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_14_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_15_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_15_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_16_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_16_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_17_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_17_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_18_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_18_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
            $table->unsignedInteger('half_affiliation_type_19_id')->default(null)->nullable(true);
            $table->foreign('half_affiliation_type_19_id')->references('id')->on('half_affiliation_options')->onUpdate('cascade');
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
        Schema::dropIfExists('half_affiliations');
    }
}
