<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foreign_keys', function (Blueprint $table) {
            $table->id();

            Schema::table('users', function (Blueprint $table) {
                $table->unsignedBigInteger('role_id');
                $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            });

            Schema::table('posts', function (Blueprint $table) {
                $table->unsignedBigInteger('user_id');

                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });

            Schema::table('drugs', function (Blueprint $table) {
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

                $table->unsignedBigInteger('drug_families_id');
                $table->foreign('drug_families_id')->references('id')->on('drug_families')->onDelete('cascade');

                $table->unsignedBigInteger('route_id');
                $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');

                $table->unsignedBigInteger('atc_id');
                $table->foreign('atc_id')->references('id')->on('atc')->onDelete('cascade');
            });

            Schema::table('references', function (Blueprint $table) {
                $table->unsignedBigInteger('user_id');

                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });

            Schema::table('targets', function (Blueprint $table) {
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('target_type_id');

                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('target_type_id')->references('id')->on('target_types')->onDelete('cascade');
            });

            Schema::table('herbs', function (Blueprint $table) {
                $table->unsignedBigInteger('user_id');

                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });


           /* Schema::table('atc', function (Blueprint $table) {
                $table->unsignedBigInteger('drug_families_id');
                $table->foreign('drug_families_id')->references('id')->on('drug_families')->onDelete('cascade');
            });*/



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
        Schema::dropIfExists('foreign_keys');
    }
}
