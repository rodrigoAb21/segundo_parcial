<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expediente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nurej');
            $table->string('web_id');
            $table->dateTime('fecha_recepcion');
            $table->string('descripcion');
            $table->string('materia');
            $table->string('procedimiento');
            $table->integer('nro_fojas');

            $table->unsignedInteger('tipo_proceso_id');
            $table->foreign('tipo_proceso_id')->references('id')->on('tipo_proceso')->onDelete('cascade');

            $table->unsignedInteger('juzgado_id');
            $table->foreign('juzgado_id')->references('id')->on('juzgado')->onDelete('cascade');

            $table->unsignedInteger('juez_id');
            $table->foreign('juez_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expediente');
    }
}
