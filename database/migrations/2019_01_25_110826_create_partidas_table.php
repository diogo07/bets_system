<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 8);
            $table->string('campeonato');
            $table->string('time_casa');
            $table->string('time_fora');
            $table->string('data_jogo', 15);
            $table->string('horario', 8);
            $table->string('status_jogo', 20);
            $table->string('placar_casa', 3);
            $table->string('placar_fora', 3);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidas');
    }
}
