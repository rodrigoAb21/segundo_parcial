<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFojaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foja', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->dateTime('fecha');
            $table->string('src');
            $table->text('contenido');

            $table->unsignedInteger('expediente_id');
            $table->foreign('expediente_id')->references('id')->on('expediente')->onDelete('cascade');

            $table->unsignedInteger('tipo_foja_id');
            $table->foreign('tipo_foja_id')->references('id')->on('tipo_foja')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foja');
    }
}
