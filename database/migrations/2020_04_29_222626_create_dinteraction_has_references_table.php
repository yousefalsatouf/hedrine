<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDinteractionHasReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinteraction_has_references', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reference_id')->unsigned();
            $table->unsignedBigInteger('dinteraction_id')->unsigned();
            
            // Je relie la table references à la table references_has_dinteractions (table pivot) qui est elle même 
            // est reliée à la table dinteractions
            $table->foreign('reference_id')->references('id')->on('references');
            $table->foreign('dinteraction_id')->references('id')->on('dinteractions');
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
        Schema::dropIfExists('dinteraction_has_references');
    }
}
