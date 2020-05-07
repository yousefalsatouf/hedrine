<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinteractionHasEffectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinteraction_has_effects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('effect_id')->unsigned();
            $table->unsignedBigInteger('hinteraction_id')->unsigned();
            
            // Je relie la table effects à la table effects_has_hinteractions (table pivot) qui est elle même 
            // est reliée à la table hinteractions
            $table->foreign('effect_id')->references('id')->on('effects');
            $table->foreign('hinteraction_id')->references('id')->on('hinteractions');
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
        Schema::dropIfExists('hinteraction_has_effects');
    }
}
