<template>
    <div id="cotacoes">
        <cabecalho titulo="COTAÇÕES"></cabecalho>
        <div id="loading-cots">
            <preloading></preloading>
        </div>

        <div id="loaded-cots">
            <cotacoes @aposta="informarAposta" tipo="VENCEDOR TEMPO NORMAL"></cotacoes>
            <div class="limp"></div>
            <cotacoes @aposta="informarAposta" tipo="GOLS NA PARTIDA"></cotacoes>
        </div>
    </div>
</template>

<script>
    export default {
        computed:{
            partidaAtual: function () {
                this.$store.commit('setOddsTempoNormal', this.$store.state.jogos[0]);
            }
        },
        methods:{
            informarAposta(aposta){
                let codigo = aposta.split('_')[1];
            }
           
        },
        mounted: function () {
            setTimeout(function(){
                document.getElementById('loading-cots').style.display = "none";
                document.getElementById('loaded-cots').style.display = "block";
            }, 2000);
        },
    }
</script>


<style>
    #cotacoes{
        display: block;
        float: left;
        width: 30%;
        height: 100vh;
        border-right: 3px solid black;
        border-bottom: 3px solid black;
        overflow-y: scroll !important;
        background-color: rgb(48, 47, 47);
    }

    .limp{
        clear: both;
    }

    #loading-cots{
       text-align: center;
       margin-top: 40%;
    }

    #loaded-cots{
        display: none;
    }

    @media screen and (max-width: 992px) {      
        #cotacoes{
            display: none;
            width: 100%;
        }
    }


    @media screen and (max-width: 600px) {   
        #cotacoes{
            display: none;
            width: 100%;
        }
    }
</style>
