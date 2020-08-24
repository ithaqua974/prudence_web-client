<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrat_types', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contrats_id')->unsigned();
            $table->foreign('contrats_id')->references('id')->on('contrats');
            $table->timestamps();
            $table->string('nom');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrat_types');
    }
}
