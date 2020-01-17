<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->longText('image');
            $table->text('description')->default(null)->nullable(true);
            $table->unsignedInteger('imageable_id');
            $table->string('imageable_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn(['image']);
            $table->dropColumn(['description']);
            $table->dropColumn(['imageable_id']);
            $table->dropColumn(['imageable_type']);
        });
    }
}
