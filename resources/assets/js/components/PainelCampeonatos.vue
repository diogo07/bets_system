<template>
    <div id="campeonatos">
        <cabecalho titulo="CAMPEONATOS"></cabecalho>
        <div id="loading-campeonatos">
            <preloading></preloading>
        </div>
        
        <div id="loaded-campeonatos">
            <div v-if="partidas.length > 0">
                <campeonato 
                titulo="TODOS" 
                cursor="pointer"
                filtro="sim"
                funcao="all"
                tipo="hover"
                ></campeonato>
            </div>
            <div v-for="p in partidas">
                <campeonato 
                    v-if="p.campeonato != 'nulo'" 
                        v-bind:titulo="p.campeonato.toUpperCase()" 
                        cursor="pointer" 
                        v-bind:codigo="p.codigo"
                        @filtro="filtrar"
                        filtro="sim"
                ></campeonato>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        computed:{
            partidas: function () {
                return this.$store.state.partidas;      
            }
        },
        methods: {
            exibirCampeonatos() {
                
            },

            filtrar(filtro){
                this.$emit('filtrar', filtro);
            },
        },
        mounted: function () {
            setTimeout(function(){
                document.getElementById('loading-campeonatos').style.display = "none";
                document.getElementById('loaded-campeonatos').style.display = "block";
            }, 1000);
        },
    }
</script>


<style>
    #campeonatos{
        display: block;
        float: left;
        width: 20%;
        height: 100vh;
        border-right: 3px solid black;
        border-bottom: 3px solid black;
        overflow-y: scroll !important;
        background-color: white;
    }

    #loading-campeonatos{
       text-align: center;
       margin-top: 40%;
    }

    #loaded-campeonatos{
        display: none;
    }

    .camp{
        background-color: #A0A6A0;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 18px;
        border-bottom: 2px solid black;
        font-family: 'Oswald', sans-serif;
        color:black;
    }

    .camp span{
        text-align: left;
        margin-left: 10px;
    }

    @media screen and (max-width: 992px) {      
        #campeonatos{
            display: none;
            width: 100%;
        }
    }


    @media screen and (max-width: 600px) {   
        #campeonatos{
            display: none;
            width: 100%;
        }
    }
</style>
