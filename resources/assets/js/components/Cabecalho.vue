<template>
    <div class="cabecalho">
        <span>{{titulo}}</span>
    </div>
    
</template>

<script>
    export default {
        props:['titulo']
    }
</script>


<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Slab');

    .cabecalho{
        width: 100%;
        padding-top: 15px;
        padding-bottom: 15px;
        background-color: #811127;
        font-family: 'Roboto Slab', serif;
        font-size: 20px;
        font-weight: bolder;
        color: white;
        text-align: center;
        border-bottom: 2px solid black;
        border-top: 2px solid black;
    }
</style>
