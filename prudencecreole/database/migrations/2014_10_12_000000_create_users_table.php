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
            $table->integer('user_role_id')->default('2');
            $table->string('telephone');
            $table->string('password');
            $table->boolean('actif')->nullable();
            $table->string('prenom_conjoint')->nullable();
            $table->string('njf_conjoint')->nullable();
            $table->integer('nb_enfants')->nullable();
            $table->integer('nb_piece')->nullable();
            $table->integer('surface')->nullable();
            $table->boolean('propriete')->nullable();
            $table->string('modele')->nullable();
            $table->string('marque')->nullable();
            $table->string('immatriculation')->nullable();
            $table->integer('chevaux')->nullable();
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
