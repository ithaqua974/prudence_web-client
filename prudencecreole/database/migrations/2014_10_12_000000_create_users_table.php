<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('num_client')->nullable();
            $table->string('email')->unique();
            $table->integer('role_id')->default('1');
            $table->string('telephone');
            $table->string('password');
            $table->boolean('actif')->nullable();
            $table->rememberToken();
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
