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
            $table->bigIncrements('id');
            $table->increments('contrats_id')->unsigned();
            $table->foreign('contrats_id')->references('id');
            $table->timestamps();
            $table->string(20);
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
