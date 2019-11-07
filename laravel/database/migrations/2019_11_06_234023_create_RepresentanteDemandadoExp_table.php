<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentanteDemandadoExpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rep_dmd_exp', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('rep_dmd_id');
            $table->foreign('rep_dmd_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('rep_dmd_exp');
    }
}
