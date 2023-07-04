<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('apelido');
            $table->string('email')->unique();
            $table->string('git')->unique();
            $table->string('foto')->nullable();
            $table->string('cidade');
            $table->string('estado');
            $table->text('biografia');
            $table->integer('sexo_id');
            $table->string('aeroporto',50)->nullable();
            $table->string('alimentacao',100)->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
