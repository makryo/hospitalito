<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->integer('n_token');
            $table->string('visitante');
            $table->string('rango');
            $table->string('validez');

            $table->bigInteger('pacientes_id')->unsigned();
            $table->foreign('pacientes_id')->references('id')->on('pacientes');

            $table->bigInteger('planta_cama_id')->unsigned();
            $table->foreign('planta_cama_id')->references('id')->on('planta_camas');

            $table->bigInteger('planta_id')->unsigned();
            $table->foreign('planta_id')->references('id')->on('plantas');

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
        Schema::dropIfExists('visitas');
    }
}
