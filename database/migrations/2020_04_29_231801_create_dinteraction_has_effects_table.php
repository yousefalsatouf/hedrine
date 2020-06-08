<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDinteractionHasEffectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinteraction_has_effects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('effect_id')->unsigned();
            $table->unsignedBigInteger('dinteraction_id')->unsigned();
            
            // Je relie la table effects à la table effects_has_dinteractions (table pivot) qui est elle même 
            // est reliée à la table dinteractions
            $table->foreign('effect_id')->references('id')->on('effects')->onDelete('cascade');
            $table->foreign('dinteraction_id')->references('id')->on('dinteractions')->onDelete('cascade');
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
        Schema::dropIfExists('dinteraction_has_effects');
    }
}
