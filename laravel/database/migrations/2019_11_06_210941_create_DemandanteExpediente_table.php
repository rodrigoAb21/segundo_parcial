<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandanteExpedienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dmt_exp', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('dmt_id');
            $table->foreign('dmt_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('expediente_id');
            $table->foreign('expediente_id')->references('id')->on('expediente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dmt_exp');
    }
}
