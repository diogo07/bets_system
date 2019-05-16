<template>
    <div>
        <div v-if="tipo">
        <div v-if="filtro && !funcao" class="camp" v-bind:style="'cursor:'+cursor" v-on:click="filtrarCampeonato(codigo)" >
            <span>{{titulo}}</span>        
        </div>

        <div v-if="filtro && funcao" class="camp" v-bind:style="'cursor:'+cursor" v-on:click="exibirTodos()" >
            <span>{{titulo}}</span>        
        </div>

        <div v-if="!filtro && !funcao"  class="camp">
            <span>{{titulo}}</span>        
        </div>
    </div>

    <div v-if="!tipo">
        <div v-if="filtro && !funcao" class="camp1" v-bind:style="'cursor:'+cursor" v-on:click="filtrarCampeonato(codigo)" >
            <span>{{titulo}}</span>        
        </div>

        <div v-if="filtro && funcao" class="camp1" v-bind:style="'cursor:'+cursor" v-on:click="exibirTodos()" >
            <span>{{titulo}}</span>        
        </div>

        <div v-if="!filtro && !funcao"  class="camp1">
            <span>{{titulo}}</span>        
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        props:['titulo', 'cursor', 'codigo', 'filtro', 'funcao', 'tipo'],
        methods:{
            filtrarCampeonato(filtro){
                this.$emit('filtro', filtro);
            },
            exibirTodos(){
                this.$store.commit('setJogos', this.$store.state.partidas); 
            }
            
        }
    }
</script>

<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Slab');

    .camp{
        background-color: rgb(82, 82, 82);
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 14px;
        border-bottom: 2px solid white;
        font-family: 'Roboto Slab', serif;
        color:white;

    }

    .camp1{
        background-color: rgb(82, 82, 82);
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 14px;
        border-bottom: 2px solid white;
        font-family: 'Roboto Slab', serif;
        color:white;

    }

    .camp:hover{
        background-color: white;
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 14px;
        border-bottom: 2px solid #811127;
        font-family: 'Roboto Slab', serif;
        color:#811127;

    }
</style>
