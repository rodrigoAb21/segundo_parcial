<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentanteDemandanteExpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rep_dmt_exp', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('rep_dmt_id');
            $table->foreign('rep_dmt_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('rep_dmt_exp');
    }
}
