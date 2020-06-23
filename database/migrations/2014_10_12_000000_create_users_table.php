<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->string('team', 45)->nullable();
            $table->string('tel1', 45)->nullable();
            $table->string('tel2', 45)->nullable();
            $table->string('RGPD')->nullable();
            $table->string('username', 50)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->smallInteger('is_active')->default(0);
            $table->smallInteger('denied')->nullable();
            $table->integer('unsubscribe')->default('0');
            $table->rememberToken();
            $table->dateTime('created')->nullable();
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
        Schema::dropIfExists('users');
    }
}
