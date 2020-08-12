<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prenom_conjoint');
            $table->string('njf_conjoint');
            $table->integer('nb_enfants');
            $table->boolean('valide');
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
        Schema::dropIfExists('santes');
    }
}
