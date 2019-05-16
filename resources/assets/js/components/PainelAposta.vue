<template>
    <div id="apostas">
        <cabecalho titulo="APOSTA"></cabecalho>
        <form action="" method="post">
            <div class="left-apostas">
                <div class="form-group">
                    <label for="apostador" class="desc">Apostador</label>
                    <input type="text" class="form-control" id="apostador" name="apostador" placeholder="Apostador">
                </div>

                <div class="form-group">
                    <label for="apostador" class="desc">Nº de Jogos</label>
                    <input type="text" class="form-control" id="apostador" v-model="apostas.length" readonly name="apostador">
                </div>
            </div>

            <div class="left-apostas">
                <div class="form-group">
                    <label for="valor" class="desc">Valor</label>
                    <input type="number" class="form-control" id="valor" step="0.01"  @keyup="atualizaRetorno" name="valor">
                </div>

                <div class="form-group">
                    <label for="retorno" class="desc">Retorno</label>
                    <input type="text" class="form-control" id="retorno" v-bind:value="'R$ 0.00'" readonly name="retorno">
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="APOSTAR">
            <input type="button" class="btn btn-danger" value="LIMPAR">

            <div class="limp"></div>
            
            <div v-for="aposta in apostas">
                <aposta
                    v-bind:campeonato="aposta.campeonato"
                    v-bind:casa="aposta.casa"
                    v-bind:fora="aposta.fora"
                    v-bind:data="aposta.data"
                    v-bind:hora="aposta.hora"
                    v-bind:valor="aposta.valor"
                    v-bind:tipo="aposta.tipo"
                    v-bind:codigo="aposta.codigo"
                ></aposta>
            </div>
        </form>
        
    </div>
</template>

<script>
    export default {
        computed:{
            apostas: function () {
                return this.$store.state.apostas;      
            }
        },

        methods:{
            atualizaRetorno: function () {
                let valorAposta = document.getElementById('valor').value;
                let apostas = this.$store.state.apostas;
                let val = 1.00;
                if(parseFloat(valorAposta) <= 0){
                    document.getElementById('retorno').value = 'R$ 0.00';
                }else if(parseFloat(valorAposta) > 0  && apostas.length == 0){
                    document.getElementById('retorno').value = 'R$ '+valorAposta;
                }else{
                    for(let i = 0; i < apostas.length; i++){
                        val = val * parseFloat(apostas[i].valor);
                    }
                    document.getElementById('retorno').value = 'R$ '+(val * parseFloat(valorAposta).toFixed(2));
                }


            }
        }
    }
</script>


<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Slab');

    #apostas{
        display: block;
        float: left;
        width: 20%;
        height: 100vh;
        overflow-y: scroll !important;
        font-family: 'Roboto Slab', serif;
        font-weight: normal;
        border-bottom: 3px solid black;
         background-color: white;
    }

    .desc{
        font-size: 18px;
        font-weight: normal;
        color: black;
        text-align: left;
    }

    .titulo{
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
        border-bottom: 3px solid black;
        border-top: 3px solid black;
    }

    .limp{
        clear: both;

    }

    .left-apostas{
        width: 50%;
        float: left;
    }

    .right{
        width: 50%;
        float: right;
    }

    @media screen and (max-width: 992px) {      
        #apostas{
            display: none;
            width: 100%;
        }
    }


    @media screen and (max-width: 600px) {   
        #apostas{
            display: none;
            width: 100%;
        }
    }
</style>
