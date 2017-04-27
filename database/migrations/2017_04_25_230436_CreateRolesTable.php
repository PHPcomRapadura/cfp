<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         //funções do sistema
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('perfil',50);
            $table->string('descricao',150);
            $table->timestamps();
        });
        
        
            //papeis e funções do usuario
            Schema::create('role_user', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->integer('role_id')->unsigned();
        
                 
                $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        
                $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade');
        
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
        Schema::dropIfExists('roles');
        Schema::dropIfExists('role_user');
    }
}
