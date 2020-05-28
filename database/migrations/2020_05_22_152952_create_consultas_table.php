<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('pacientes_id')->unsigned();
            $table->foreign('pacientes_id')->references('id')->on('pacientes');

            $table->bigInteger('diagnostico_id')->unsigned();
            $table->foreign('diagnostico_id')->references('id')->on('diagnosticos');

            $table->bigInteger('medico_id')->unsigned();
            $table->foreign('medico_id')->references('id')->on('medicos');

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
        Schema::dropIfExists('consultas');
    }
}
