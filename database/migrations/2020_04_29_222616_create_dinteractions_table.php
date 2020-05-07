<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDinteractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinteractions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drug_id')->unsigned();
            $table->unsignedBigInteger('target_id')->unsigned();
            $table->text('note')->nullable();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->unsignedBigInteger('force_id')->unsigned();
            $table->dateTime('validated')->nullable();

            //Relation un à plusieurs
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('force_id')->references('id')->on('forces');

            // Relations plusieurs à plusieurs
            // Je relie la table drugs à la table dinteractions (table pivot) qui est elle même est reliée à la table targets
            $table->foreign('drug_id')->references('id')->on('drugs');
            $table->foreign('target_id')->references('id')->on('targets');
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
        Schema::dropIfExists('dinteractions');
    }
}
