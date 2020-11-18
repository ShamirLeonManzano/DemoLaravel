<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representatives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre',100);
            $table->string('Código',30);
            $table->string('Cédula',20);
            $table->date('Fecha de Nacimiento');
            $table->unsignedBigInteger('id_player');
            $table->timestamps();

            $table->foreign('id_player')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representatives');
    }
}
