<template>
    <div class="jogo">
        <div class="informacoes" v-on:click="exibirCots()">{{casa}} X {{fora}} - {{hora}} - {{data}}</div>
        <table class="cots">
            <thead>
                <tr>
                    <th>CASA</th>
                    <th>EMPATE</th>
                    <th>FORA</th>
                    <th v-if="oddsambas != '0.00'">AMBAS</th>
                    <th v-if="oddsgolemeio != '0.00'">+1.5</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td v-bind:class="'CASA-NA-PARTIDA_'+codigo" v-on:click="adicionar('CASA-NA-PARTIDA_'+codigo+'_'+oddscasa)">{{oddscasa}}</td>
                    <td v-bind:class="'EMPATE-NA-PARTIDA_'+codigo" v-on:click="adicionar('EMPATE-NA-PARTIDA_'+codigo+'_'+oddsempate)">{{oddsempate}}</td>
                    <td v-bind:class="'FORA-NA-PARTIDA_'+codigo" v-on:click="adicionar('FORA-NA-PARTIDA_'+codigo+'_'+oddsfora)">{{oddsfora}}</td>
                    <td v-bind:class="'AMBAS-SIM-NA-PARTIDA_'+codigo" v-if="oddsambas != '0.00'" v-on:click="adicionar('AMBAS-SIM-NA-PARTIDA_'+codigo+'_'+oddsambas)">{{oddsambas}}</td>
                    <td v-bind:class="'GOL-E-MEIO-NA-PARTIDA_'+codigo" v-if="oddsgolemeio != '0.00'" v-on:click="adicionar('GOL-E-MEIO-NA-PARTIDA_'+codigo+'_'+oddsgolemeio)">{{oddsgolemeio}}</td>
                </tr>
            </tbody>
        </table>
        
    </div>
</template>

<script>
    export default {
        props:['codigo', 'casa', 'fora', 'hora', 'data', 'oddscasa', 'oddsempate', 'oddsfora', 'oddsambas', 'oddsgolemeio'],
        methods: {
        adicionar(codigo) {
            this.$emit('aposta', codigo);
        },
        exibirCots(){
            axios.get("/partidas/"+this.codigo).then(res => {
                var dados = JSON.parse(res.data.partida);
                this.$store.commit('setOddsTempoNormal', dados[0]);
            }); 
        }
    },
    }
</script>

<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Slab');

    .jogo{
        background-color: #9c2d44;
        text-align: center;
        font-size: 13px;
        font-weight: normal;
        font-family: 'Roboto Slab', serif;
        color:black;
        border-bottom: 2px solid black;
        padding: 0;
        
    }

    .informacoes{
        width: 100%;
        background-color: rgb(48, 47, 47);
        padding-top: 5px;
        color: white;
        padding-bottom: 5px;
        font-size: 15px;
        cursor: pointer;
    }

    .informacoes:hover{
        color: black;
        background-color: white;
        border-top: 2px solid black;
        border-bottom: 2px solid black;
        transition: 0.5s;
    }

    .cots tr{
        border: 1px solid white;
    }

    .cots{
        width: 100%;
    }

    .cots tr{
        border: 1px solid white;
    }

    .cots td{
        text-align: center;
        color: white;
        border: 1px solid white;
        cursor: pointer;
    }

    .cots th{
        text-align: center;
        background-color: #1d496d;
        color: white;
        font-weight: normal;
        border: none;
    }
  

    .cots td:hover{
        background-color: lightslategrey;
    }

</style>