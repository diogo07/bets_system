<template>
    <div class="aposta">
        <div class="close" v-on:click="fechar()">X</div>
        <span class="evidence">{{tipo.replace('-', ' ')}} - {{valor}}</span>
        <div class="nomecam">{{campeonato}}</div>
        <span>{{casa}} X {{fora}}</span><br>
        <span>{{hora}} - {{data}}</span>
        
    </div>
</template>

<script>
    export default {
        props:['campeonato', 'casa', 'fora', 'data', 'hora', 'valor', 'tipo', 'codigo'],
        methods:{
            fechar: function () {
                var listaAposta = this.$store.state.apostas;
                let id = this.tipo + '_' + this.codigo;

                for(var i = 0; i < listaAposta.length; i++){
                    if(listaAposta[i].codigo == this.codigo){                                    
                        document.getElementById(id).setAttribute('class', 'desmarcado');
                        listaAposta.splice(i, 1);
                        this.$store.commit('setApostas', listaAposta);
                        return;
                    }
                }                    
            }
        }
    }
</script>

<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Slab');

    .aposta{
        font-family: 'Roboto Slab', serif;
        text-align: left;
        padding-top: 5px;
        padding-bottom: 5px;
        font-size: 12px;
        color:black;
        border-bottom: 2px solid black;

    }

    .aposta span{
        padding-left: 10px;
    }

    .evidence{
        font-weight: bolder;
        font-size: 15px;
        padding-left: 10px;
    }

    .nomecam{
        padding-left: 10px;
    }
    .close{
        position: relative;
        top: 0px;
        right: 5px;
        font-size: 15px;
        background-color: rgb(248, 23, 23);
        color: white;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 12px;
        padding-right: 12px;
        border-radius: 50%;
    }

    .close:hover{
        background-color: rgb(248, 23, 23);
        color: white;
    }


    .aposta {
        position: relative;
        animation-name: vai-e-volta;
        animation-duration: 0.2s;
    }

    @keyframes vai-e-volta {
        0%   {left:-100px; top:0px;}
        10%  {left:-90px; top:0px;}
        20%  {left:-80px; top:0px;}
        30%  {left:-70px; top:0px;}
        40%  {left:-60px; top:0px;}
        50%  {left:-50px; top:0px;}
        60%  {left:-40px; top:0px;}
        70%  {left:-30px; top:0px;}
        80%  {left:-20px; top:0px;}
        90%  {left:-10px; top:0px;}
        100% {left:0px; top:0px;}
    }

</style>