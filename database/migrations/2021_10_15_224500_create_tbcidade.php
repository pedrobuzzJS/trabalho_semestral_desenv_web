<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbcidade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbcidade', function (Blueprint $table) {
            $table->id();
            $table->integer('cidade_id');
            $table->string('sigla');
            $table->string('nome');
            $table->timestamps();

            $table->foreign('cidade_id')->references('id')->on('tbestado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbcidade');
    }
}
