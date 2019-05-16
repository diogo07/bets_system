<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Partida;
use Illuminate\Support\Facades\DB;

class Partida extends Model
{
    protected $fillable = [
        'id', 'campeonato', 'time_casa', 'time_fora', 'data_jogo', 'horario', 'status_jogo', 'placar_casa', 'placar_fora',
    ];


    public static function listarSemRepetirCampeonato()
    {
        date_default_timezone_set('America/Recife');
        $data = date("d/m/Y");
        $hora = date('H:i');
        $lista = DB::table('partidas')
        ->join('odds', 'odds.codigo_partida', '=', 'partidas.codigo')
        // ->where('data_jogo', '>=', '31/01/2019')
        ->where('horario', '>', '07:00')
        ->orderBy('campeonato')
        ->get();
        $camp_aux = "";
        foreach ($lista as $key => $value){
            if($camp_aux != "" && $value->campeonato == $camp_aux){
                $camp_aux = $value->campeonato;
                $value->campeonato = "nulo";
            }else{
                $camp_aux = $value->campeonato;
            }
            
        }
        return $lista;
    }


    public static function findByCodigo($codigo){
        return DB::table('partidas')
            ->join('odds', 'odds.codigo_partida', '=', 'partidas.codigo')
            ->orderBy('campeonato')
            ->where('codigo', '=', $codigo)->get();
    }


    public static function findByCotacoesTempoNormal($codigo){
        return DB::table('partidas')
            ->join('odds', 'odds.codigo_partida', '=', 'partidas.codigo')
            ->select('odds.odds_ganhador_casa_full_time', 
                'odds.odds_empate_full_time', 
                'odds.odds_ganhador_visitante_full_time', 
                'odds.odds_soma_placar_casa_fora_full_time_par', 
                'odds.odds_soma_placar_casa_fora_full_time_impar', 
                'odds.odds_mais_de_1_gol_full_time', 
                'odds.odds_menos_de_1_gol_full_time', 
                'odds.odds_mais_de_2_gols_full_time', 
                'odds.odds_menos_de_2_gols_full_time', 
                'odds.odds_mais_de_3_gols_full_time', 
                'odds.odds_menos_de_3_gols_full_time', 
                'odds.odds_mais_de_4_gols_full_time', 
                'odds.odds_menos_de_4_gols_full_time', 
                'odds.odds_mais_de_5_gols_full_time', 
                'odds.odds_menos_de_5_gols_full_time', 
                'odds.odds_mais_de_6_gols_full_time', 
                'odds.odds_menos_de_6_gols_full_time', 
                'odds.odds_casa_ou_empate_full_time', 
                'odds.odds_casa_ou_fora_full_time', 
                'odds.odds_fora_empate_full_time', 
                'odds.odds_casa_casa', 
                'odds.odds_casa_empate', 
                'odds.odds_casa_fora', 
                'odds.odds_empate_casa', 
                'odds.odds_empate_empate', 
                'odds.odds_empate_fora', 
                'odds.odds_fora_casa', 
                'odds.odds_fora_empate', 
                'odds.odds_fora_fora', 
                'odds.odds_1_a_0_full_time', 
                'odds.odds_2_a_0_full_time', 
                'odds.odds_2_a_1_full_time', 
                'odds.odds_3_a_0_full_time', 
                'odds.odds_3_a_1_full_time', 
                'odds.odds_3_a_2_full_time', 
                'odds.odds_4_a_0_full_time', 
                'odds.odds_4_a_1_full_time', 
                'odds.odds_4_a_2_full_time', 
                'odds.odds_4_a_3_full_time', 
                'odds.odds_5_a_0_full_time', 
                'odds.odds_5_a_1_full_time', 
                'odds.odds_5_a_2_full_time', 
                'odds.odds_6_a_0_full_time', 
                'odds.odds_6_a_1_full_time', 
                'odds.odds_0_a_0_full_time', 
                'odds.odds_1_a_1_full_time', 
                'odds.odds_2_a_2_full_time', 
                'odds.odds_3_a_3_full_time', 
                'odds.odds_4_a_4_full_time', 
                'odds.odds_0_a_1_full_time', 
                'odds.odds_0_a_2_full_time', 
                'odds.odds_1_a_2_full_time', 
                'odds.odds_0_a_3_full_time', 
                'odds.odds_1_a_3_full_time', 
                'odds.odds_2_a_3_full_time', 
                'odds.odds_0_a_4_full_time', 
                'odds.odds_1_a_4_full_time', 
                'odds.odds_2_a_4_full_time', 
                'odds.odds_3_a_4_full_time', 
                'odds.odds_3_a_5_full_time', 
                'odds.odds_4_a_5_full_time', 
                'odds.odds_2_a_6_full_time', 
                'odds.odds_3_a_6_full_time', 
                'odds.odds_4_a_6_full_time', 
                'odds.odds_5_a_6_full_time',
                'odds.odds_qtd_gols_impar_full_time', 
                'odds.odds_qtd_gols_par_full_time',
                'odds.odds_ambas_sim_full_time', 
                'odds.odds_ambas_nao_full_time')
            ->where('codigo', '=', $codigo)->get();
    }
}
