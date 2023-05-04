<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('nom', '100');
            $table->string('prenom', '100');
            $table->string('adresse', '100');
            $table->string('password', '100');
            $table->string('email', '100')->unique();
            $table->string('avatar', 1000)->nullable();
            $table->string('droit', '20');
            $table->remembertoken()->nullable();
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
};
