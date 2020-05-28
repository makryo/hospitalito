<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacions', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('pacientes_id')->unsigned();
            $table->foreign('pacientes_id')->references('id')->on('pacientes');

            $table->bigInteger('planta_id')->unsigned();
            $table->foreign('planta_id')->references('id')->on('plantas');

            $table->bigInteger('planta_cama_id')->unsigned();
            $table->foreign('planta_cama_id')->references('id')->on('planta_camas');

            $table->date('fecha_ingreso');
            $table->tinyInteger('alta');
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
        Schema::dropIfExists('asignacions');
    }
}
