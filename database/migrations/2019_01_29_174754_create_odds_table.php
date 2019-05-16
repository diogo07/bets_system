<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_partida', 8);
            $table->string('odds_ganhador_casa_full_time', 8);
            $table->string('odds_empate_full_time', 8);
            $table->string('odds_ganhador_visitante_full_time', 8);
            $table->string('odds_ganhador_casa_1_tempo', 8);
            $table->string('odds_empate_1_tempo', 8);
            $table->string('odds_ganhador_visitante_1_tempo', 8);
            $table->string('odds_ganhador_casa_2_tempo', 8);
            $table->string('odds_empate_2_tempo', 8);
            $table->string('odds_ganhador_visitante_2_tempo', 8);
            $table->string('odds_soma_placar_casa_fora_full_time_par', 8);
            $table->string('odds_soma_placar_casa_fora_full_time_impar', 8);
            $table->string('odds_mais_de_1_gol_full_time', 8);
            $table->string('odds_menos_de_1_gol_full_time', 8);
            $table->string('odds_mais_de_2_gols_full_time', 8);
            $table->string('odds_menos_de_2_gols_full_time', 8);
            $table->string('odds_mais_de_3_gols_full_time', 8);
            $table->string('odds_menos_de_3_gols_full_time', 8);
            $table->string('odds_mais_de_4_gols_full_time', 8);
            $table->string('odds_menos_de_4_gols_full_time', 8);
            $table->string('odds_mais_de_5_gols_full_time', 8);
            $table->string('odds_menos_de_5_gols_full_time', 8);
            $table->string('odds_mais_de_6_gols_full_time', 8);
            $table->string('odds_menos_de_6_gols_full_time', 8);
            $table->string('odds_mais_de_1_gol_1_tempo', 8);
            $table->string('odds_menos_de_1_gol_1_tempo', 8);
            $table->string('odds_mais_de_2_gols_1_tempo', 8);
            $table->string('odds_menos_de_2_gols_1_tempo', 8);
            $table->string('odds_mais_de_3_gols_1_tempo', 8);
            $table->string('odds_menos_de_3_gols_1_tempo', 8);
            $table->string('odds_mais_de_4_gols_1_tempo', 8);
            $table->string('odds_menos_de_4_gols_1_tempo', 8);
            $table->string('odds_mais_de_1_gol_2_tempo', 8);
            $table->string('odds_menos_de_1_gol_2_tempo', 8);
            $table->string('odds_mais_de_2_gols_2_tempo', 8);
            $table->string('odds_menos_de_2_gols_2_tempo', 8);
            $table->string('odds_mais_de_3_gols_2_tempo', 8);
            $table->string('odds_menos_de_3_gols_2_tempo', 8);
            $table->string('odds_mais_de_4_gols_2_tempo', 8);
            $table->string('odds_menos_de_4_gols_2_tempo', 8);
            $table->string('odds_casa_ou_empate_full_time', 8);
            $table->string('odds_casa_ou_fora_full_time', 8);
            $table->string('odds_fora_empate_full_time', 8);
            $table->string('odds_casa_ou_empate_1_tempo', 8);
            $table->string('odds_casa_ou_fora_1_tempo', 8);
            $table->string('odds_fora_empate_1_tempo', 8);
            $table->string('odds_casa_ou_empate_2_tempo', 8);
            $table->string('odds_casa_ou_fora_2_tempo', 8);
            $table->string('odds_fora_empate_2_tempo', 8);
            $table->string('odds_casa_casa', 8);
            $table->string('odds_casa_empate', 8);
            $table->string('odds_casa_fora', 8);
            $table->string('odds_empate_casa', 8);
            $table->string('odds_empate_empate', 8);
            $table->string('odds_empate_fora', 8);
            $table->string('odds_fora_casa', 8);
            $table->string('odds_fora_empate', 8);
            $table->string('odds_fora_fora', 8);
            $table->string('odds_1_a_0_full_time', 8);
            $table->string('odds_2_a_0_full_time', 8);
            $table->string('odds_2_a_1_full_time', 8);
            $table->string('odds_3_a_0_full_time', 8);
            $table->string('odds_3_a_1_full_time', 8);
            $table->string('odds_3_a_2_full_time', 8);
            $table->string('odds_4_a_0_full_time', 8);
            $table->string('odds_4_a_1_full_time', 8);
            $table->string('odds_4_a_2_full_time', 8);
            $table->string('odds_4_a_3_full_time', 8);
            $table->string('odds_5_a_0_full_time', 8);
            $table->string('odds_5_a_1_full_time', 8);
            $table->string('odds_5_a_2_full_time', 8);
            $table->string('odds_6_a_0_full_time', 8);
            $table->string('odds_6_a_1_full_time', 8);
            $table->string('odds_0_a_0_full_time', 8);
            $table->string('odds_1_a_1_full_time', 8);
            $table->string('odds_2_a_2_full_time', 8);
            $table->string('odds_3_a_3_full_time', 8);
            $table->string('odds_4_a_4_full_time', 8);
            $table->string('odds_0_a_1_full_time', 8);
            $table->string('odds_0_a_2_full_time', 8);
            $table->string('odds_1_a_2_full_time', 8);
            $table->string('odds_0_a_3_full_time', 8);
            $table->string('odds_1_a_3_full_time', 8);
            $table->string('odds_2_a_3_full_time', 8);
            $table->string('odds_0_a_4_full_time', 8);
            $table->string('odds_1_a_4_full_time', 8);
            $table->string('odds_2_a_4_full_time', 8);
            $table->string('odds_3_a_4_full_time', 8);
            $table->string('odds_3_a_5_full_time', 8);
            $table->string('odds_4_a_5_full_time', 8);
            $table->string('odds_2_a_6_full_time', 8);
            $table->string('odds_3_a_6_full_time', 8);
            $table->string('odds_4_a_6_full_time', 8);
            $table->string('odds_5_a_6_full_time', 8);
            $table->string('odds_1_a_0_1_tempo', 8);
            $table->string('odds_2_a_0_1_tempo', 8);
            $table->string('odds_2_a_1_1_tempo', 8);
            $table->string('odds_3_a_0_1_tempo', 8);
            $table->string('odds_3_a_1_1_tempo', 8);
            $table->string('odds_3_a_2_1_tempo', 8);
            $table->string('odds_4_a_0_1_tempo', 8);
            $table->string('odds_4_a_1_1_tempo', 8);
            $table->string('odds_0_a_0_1_tempo', 8);
            $table->string('odds_1_a_1_1_tempo', 8);
            $table->string('odds_2_a_2_1_tempo', 8);
            $table->string('odds_0_a_1_1_tempo', 8);
            $table->string('odds_0_a_2_1_tempo', 8);
            $table->string('odds_1_a_2_1_tempo', 8);
            $table->string('odds_0_a_3_1_tempo', 8);
            $table->string('odds_1_a_3_1_tempo', 8);
            $table->string('odds_2_a_3_1_tempo', 8);
            $table->string('odds_0_a_4_1_tempo', 8);
            $table->string('odds_1_a_4_1_tempo', 8);
            $table->string('odds_1_a_0_2_tempo', 8);
            $table->string('odds_2_a_0_2_tempo', 8);
            $table->string('odds_2_a_1_2_tempo', 8);
            $table->string('odds_3_a_0_2_tempo', 8);
            $table->string('odds_3_a_1_2_tempo', 8);
            $table->string('odds_3_a_2_2_tempo', 8);
            $table->string('odds_4_a_0_2_tempo', 8);
            $table->string('odds_4_a_1_2_tempo', 8);
            $table->string('odds_0_a_0_2_tempo', 8);
            $table->string('odds_1_a_1_2_tempo', 8);
            $table->string('odds_2_a_2_2_tempo', 8);
            $table->string('odds_0_a_1_2_tempo', 8);
            $table->string('odds_0_a_2_2_tempo', 8);
            $table->string('odds_1_a_2_2_tempo', 8);
            $table->string('odds_0_a_3_2_tempo', 8);
            $table->string('odds_1_a_3_2_tempo', 8);
            $table->string('odds_2_a_3_2_tempo', 8);
            $table->string('odds_0_a_4_2_tempo', 8);
            $table->string('odds_1_a_4_2_tempo', 8);
            $table->string('odds_qtd_gols_impar_full_time', 8);
            $table->string('odds_qtd_gols_par_full_time', 8);
            $table->string('odds_qtd_gols_impar_1_tempo', 8);
            $table->string('odds_qtd_gols_par_1_tempo', 8);
            $table->string('odds_ambas_sim_full_time', 8);
            $table->string('odds_ambas_nao_full_time', 8);
            $table->string('odds_ambas_sim_1_tempo', 8);
            $table->string('odds_ambas_nao_1_tempo', 8);
            $table->string('odds_ambas_sim_2_tempo', 8);
            $table->string('odds_ambas_nao_2_tempo', 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('odds');
    }
}
