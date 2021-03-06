<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbestado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbestado', function (Blueprint $table) {
            $table->id();
            $table->integer('pais_id');
            $table->string('sigla');
            $table->string('nome');
            $table->timestamps();

            $table->foreign('pais_id')->references('id')->on('tbpais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbestado');
    }
}
