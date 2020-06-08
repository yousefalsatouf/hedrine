<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinteractionHasReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinteraction_has_references', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reference_id')->unsigned();
            $table->unsignedBigInteger('hinteraction_id')->unsigned();
            
            // Je relie la table references à la table references_has_hinteractions (table pivot) qui est elle même 
            // est reliée à la table hinteractions
            $table->foreign('reference_id')->references('id')->on('references')->onDelete('cascade');
            $table->foreign('hinteraction_id')->references('id')->on('hinteractions')->onDelete('cascade');
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
        Schema::dropIfExists('hinteraction_has_references');
    }
}
