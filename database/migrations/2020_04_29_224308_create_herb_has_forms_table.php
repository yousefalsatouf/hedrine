<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHerbHasFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herb_has_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('herb_id')->unsigned()->nullable();
            $table->unsignedBigInteger('temporary_id')->unsigned()->nullable();
            $table->unsignedBigInteger('herb_form_id')->unsigned();

            // Je relie la table references à la table references_has_dinteractions (table pivot) qui est elle même
            // est reliée à la table dinteractions
            $table->foreign('herb_id')->references('id')->on('herbs')->onDelete('cascade');
            $table->foreign('herb_form_id')->references('id')->on('herb_forms')->onDelete('cascade');
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
        Schema::dropIfExists('herb_has_forms');
    }
}
