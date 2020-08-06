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
            $table->integer('contrat_id');
            $table->string('nom_conjoint');
            $table->string('prenom_conjoint');
            $table->integer('nb_enfants');
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
