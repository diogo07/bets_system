<template>
    <div class="odds">
        <div class="title">{{tipo}}</div>
        <div v-if="tipo == 'VENCEDOR TEMPO NORMAL'">
            {{teste()}}
            <div class='caixa-t30' :class="'CASA-NA-PARTIDA_'+getId" v-on:click="inserir('CASA-NA-PARTIDA_'+getId+'_'+this.$store.state.oddsTempoNormal.odds_ganhador_casa_full_time)">
                CASA - {{this.$store.state.oddsTempoNormal.odds_ganhador_casa_full_time}}
            </div>

            <div class='caixa-t30' :class="'EMPATE-NA-PARTIDA_'+getId" v-on:click="inserir('EMPATE-NA-PARTIDA_'+getId+'_'+this.$store.state.oddsTempoNormal.odds_empate_full_time)">
                EMPATE - {{this.$store.state.oddsTempoNormal.odds_empate_full_time}}
            </div>

            <div class='caixa-t30' :class="'FORA-NA-PARTIDA_'+getId" v-on:click="inserir('FORA-NA-PARTIDA_'+getId+'_'+this.$store.state.oddsTempoNormal.odds_ganhador_visitante_full_time)">
                FORA - {{this.$store.state.oddsTempoNormal.odds_ganhador_visitante_full_time}}
            </div>
        </div>

        <div v-if="tipo == 'GOLS NA PARTIDA'">
            <div class='caixa-t40' :class="'MAIS-DE-1-GOL-NA-PARTIDA_'+getId" v-on:click="inserir('MAIS-DE-1-GOL-NA-PARTIDA_'+getId+'_'+this.$store.state.oddsTempoNormal.odds_mais_de_1_gol_full_time)">
                MAIS DE 1 - {{this.$store.state.oddsTempoNormal.odds_mais_de_1_gol_full_time}}
            </div>

            <div class='caixa-t40' :class="'MENOS-DE-1-GOL-NA-PARTIDA_'+getId" v-on:click="inserir('MENOS-DE-1-GOL-NA-PARTIDA_'+getId+'_'+this.$store.state.oddsTempoNormal.odds_menos_de_1_gol_full_time)">
                MENOS DE 1 - {{this.$store.state.oddsTempoNormal.odds_menos_de_1_gol_full_time}}
            </div>


            <div class='caixa-t40' :class="'MAIS-DE-2-GOLS-NA-PARTIDA_'+getId" v-on:click="inserir('MAIS-DE-2-GOLS-NA-PARTIDA_'+getId+'_'+this.$store.state.oddsTempoNormal.odds_mais_de_2_gols_full_time)">
                MAIS DE 2 - {{this.$store.state.oddsTempoNormal.odds_mais_de_2_gols_full_time}}
            </div>

            <div class='caixa-t40' :class="'MENOS-DE-2-GOLS-NA-PARTIDA_'+getId" v-on:click="inserir('MENOS-DE-2-GOLS-NA-PARTIDA_'+getId+'_'+this.$store.state.oddsTempoNormal.odds_menos_de_2_gols_full_time)">
                MENOS DE 2 - {{this.$store.state.oddsTempoNormal.odds_menos_de_2_gols_full_time}}
            </div>

            <div class='caixa-t40' :class="'MAIS-DE-3-GOLS-NA-PARTIDA_'+getId" v-on:click="inserir('MAIS-DE-3-GOLS-NA-PARTIDA_'+getId+'_'+this.$store.state.oddsTempoNormal.odds_mais_de_3_gols_full_time)">
                MAIS DE 3 - {{this.$store.state.oddsTempoNormal.odds_mais_de_3_gols_full_time}}
            </div>

            <div class='caixa-t40' :class="'MENOS-DE-3-GOLS-NA-PARTIDA_'+getId" v-on:click="inserir('MENOS-DE-3-GOLS-NA-PARTIDA_'+getId+'_'+this.$store.state.oddsTempoNormal.odds_menos_de_3_gols_full_time)">
                MENOS DE 3 - {{this.$store.state.oddsTempoNormal.odds_menos_de_3_gols_full_time}}
            </div>


            <div class='caixa-t40'  :class="'MAIS-DE-4-GOLS-NA-PARTIDA_'+getId" v-on:click="inserir('MAIS-DE-4-GOLS-NA-PARTIDA_'+getId+'_'+this.$store.state.oddsTempoNormal.odds_mais_de_4_gols_full_time)">
                MAIS DE 4 - {{this.$store.state.oddsTempoNormal.odds_mais_de_4_gols_full_time}}
            </div>

            <div class='caixa-t40' :class="'MENOS-DE-4-GOLS-NA-PARTIDA_'+getId" v-on:click="inserir('MENOS-DE-4-GOLS-NA-PARTIDA_'+getId+'_'+this.$store.state.oddsTempoNormal.odds_menos_de_4_gols_full_time)">
                MENOS DE 4 - {{this.$store.state.oddsTempoNormal.odds_menos_de_4_gols_full_time}}
            </div>
        </div>
        
    </div>
</template>

<script>
    export default {
        props:['tipo', 'partida'],
        computed:{
            getId: function () {
                return this.$store.state.oddsTempoNormal.codigo;
            },
            
        },
        methods:{
            
            inserir: function (codigo) {
                this.$emit('aposta', codigo);
            },

            teste(){
                console.log(this.$store.state.oddsTempoNormal);
            }
        }
    }
</script>

<style>
     @import url('https://fonts.googleapis.com/css?family=Roboto+Slab');


    .title{
        background-color: #1d496d;
        text-align: center;
        border-bottom: 2px solid white;
        border-top: 2px solid white;
        padding-top: 10px; 
        padding-bottom: 10px;
        font-size: 15px;
        font-family: 'Roboto Slab', serif;
        color:white;

    }

    .caixa-t30{
        float: left;
        margin: 1.6%;
        width: 30%;
        background-color: #9c2d44;
        text-align: center;
        border-radius: 5px;
        border-color: #9c2d44;
        padding-top: 7px; 
        padding-bottom: 7px;
        font-size: 15px;
        font-family: 'Roboto Slab', serif;
        color:white;
        cursor: pointer;
    }

    .caixa-t40{
        float: left;
        width: 45%;
        margin: 2.5%;
        background-color: #9c2d44;
        text-align: center;
        border-radius: 5px;
        border-color: #9c2d44;
        padding-top: 7px; 
        padding-bottom: 7px;
        font-size: 15px;
        font-family: 'Roboto Slab', serif;
        color:white;
        cursor: pointer;
    }

    .caixa-t30:hover{
        background-color: lightslategrey;
    }

    .caixa-t40:hover{
        background-color: lightslategrey;
    }

    
    #loading-cots{
       text-align: center;
       margin-top: 40%;
    }
</style>