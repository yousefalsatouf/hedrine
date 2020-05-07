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
            
                $table->foreign('role_id')->references('id')->on('roles');
            });
    
            Schema::table('posts', function (Blueprint $table) {
                $table->unsignedBigInteger('user_id');
            
                $table->foreign('user_id')->references('id')->on('users');
            });
    
            Schema::table('drugs', function (Blueprint $table) {
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users');
                
                $table->unsignedBigInteger('drug_families_id');
                $table->foreign('drug_families_id')->references('id')->on('drug_families');
    
                $table->unsignedBigInteger('route_id');
                $table->foreign('route_id')->references('id')->on('routes');
    
                $table->unsignedBigInteger('atc_level_4s_id');
                $table->foreign('atc_level_4s_id')->references('id')->on('atc_level4s');
            });
    
            Schema::table('references', function (Blueprint $table) {
                $table->unsignedBigInteger('user_id');
            
                $table->foreign('user_id')->references('id')->on('users');
            });
    
            Schema::table('targets', function (Blueprint $table) {
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('target_type_id');
            
                $table->foreign('user_id')->references('id')->on('users');
                $table->foreign('target_type_id')->references('id')->on('target_types');
            });
    
            Schema::table('herbs', function (Blueprint $table) {
                $table->unsignedBigInteger('user_id');
            
                $table->foreign('user_id')->references('id')->on('users');
            });
    
            Schema::table('atc_level2s', function (Blueprint $table) {
                $table->unsignedBigInteger('drug_families_id');
            
                $table->foreign('drug_families_id')->references('id')->on('drug_families');
            });
    
            Schema::table('atc_level3s', function (Blueprint $table) {
                $table->unsignedBigInteger('atc_level2s_id');
            
                $table->foreign('atc_level2s_id')->references('id')->on('atc_level2s');
            });
    
            Schema::table('atc_level4s', function (Blueprint $table) {
                $table->unsignedBigInteger('atc_level3s_id');
            
                $table->foreign('atc_level3s_id')->references('id')->on('atc_level3s');
            });
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
