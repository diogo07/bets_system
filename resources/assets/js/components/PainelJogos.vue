<template>
    
    <div id="jogos">
        <cabecalho titulo="JOGOS"></cabecalho>
        <div id="loading-jogos">
            <preloading></preloading>
        </div>
        <div id="loaded-jogos">
            <div v-for="p in partidas">
                <campeonato 
                    v-if="p.campeonato != 'nulo'" 
                        v-bind:titulo="p.campeonato.toUpperCase()" 
                        v-bind:codigo="p.codigo"
                ></campeonato>
                <jogo @aposta="informarAposta" v-bind:codigo="p.codigo" v-bind:casa="p.time_casa" v-bind:fora="p.time_fora" v-bind:hora="p.horario" v-bind:data="p.data_jogo" v-bind:oddscasa="p.odds_ganhador_casa_full_time" v-bind:oddsempate="p.odds_empate_full_time" v-bind:oddsfora="p.odds_ganhador_visitante_full_time" v-bind:oddsgolemeio="p.odds_mais_de_1_gol_full_time" v-bind:oddsambas="p.odds_ambas_sim_full_time"></jogo>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['jogos'],   
        computed:{
            partidas: function () {
                return this.$store.state.jogos;      
            }
        },
        mounted: function () {
            setTimeout(function(){
                document.getElementById('loading-jogos').style.display = "none";
                document.getElementById('loaded-jogos').style.display = "block";
            }, 1500);
        },
        methods: {
            exibirMaisCotacoes(codigo){
               alert(codigo);                
            },
            informarAposta(dados){
                this.$emit('apostar', dados);
            },
        }
    }
</script>


<style>
    #jogos{
        display: block;
        float: left;
        width: 30%;
        height: 100vh;
        border-right: 3px solid black;
        border-bottom: 3px solid black;
        overflow-y: scroll !important;
         background-color: white;
    }

    #loading-jogos{
       text-align: center;
       margin-top: 40%;
    }

    #loaded-jogos{
        display: none;
    }

    .campeonato{
        background-color: #A0A6A0;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 18px;
        border-bottom: 2px solid black;
        font-family: 'Oswald', sans-serif;
        color:black;
        text-align: center;
    }

    .jogo{
        background-color: lightskyblue;
        text-align: center;
        padding-top: 5px;
        padding-bottom: 5px;
        font-size: 15px;
        font-weight: normal;
        font-family: 'Oswald', sans-serif;
        color:black;
        border-bottom: 2px solid black;

    }

    .cots{
        width: 100%;
        /* border: 1px solid black; */
        /* border-radius: 3px; */
    }

    .jogo span{
        font-size: 20px;
        cursor: pointer;
    }

    .cots td, .cots th{
        text-align: center;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .cots td{
        border: none;
    }

    .cots td:hover{
        background-color: lightslategrey;
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1; 
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888; 
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #1d496d;; 
    }

    @media screen and (max-width: 992px) {      
        #jogos{
            width: 100%;
        }
    }


    @media screen and (max-width: 600px) {       

        #jogos{
            width: 100%;
        }
    }
</style>
