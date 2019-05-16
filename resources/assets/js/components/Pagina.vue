<template>
    <div class="cont">
        <div class="back">
           
            {{carregarDadosComponentes()}}
            <painelcampeonatos @filtrar="alertarPainelJogos" v-bind:token="token"></painelcampeonatos>
            <paineljogos @apostar="inserirAposta"></paineljogos>
            <painelcotacoes @apostar="inserirAposta"></painelcotacoes>
            <painelaposta></painelaposta>
            <div class="limp"></div>
                
        </div> 
        
        <div id="bilhete" v-on:click="exibirBilhete()">
            <img src="../../img/bilhete.png" alt="">
        </div>
        <div id="jogo" v-on:click="exibirJogos()">
            <img src="../../img/jogos.png" alt="">
        </div>
       
    </div>
</template>

<script>
    export default {
        props:['token'],
        methods: {
            carregarDadosComponentes(){
                axios.get("/partidas/").then(res => {
                    var dados = JSON.parse(res.data.listaPartidas);
                    this.$store.commit('setPartidas', dados);
                    this.$store.commit('setJogos', dados);
                    this.$store.commit('setOddsTempoNormal', dados[0]);
                    console.log(dados[0]);
                });    
            },
            alertarPainelJogos (val) {
                axios.get("/partidas/"+val).then(res => {
                    var dados = JSON.parse(res.data.partida);
                    this.$store.commit('setJogos', dados);
                });  
            },
            inserirAposta(aposta){
                let codigo = aposta.split('_')[1];
                var listaAposta = this.$store.state.apostas;
                axios.get("/partidas/"+codigo).then(res => {
                    var dados = JSON.parse(res.data.partida);

                    var item = [];
                    item.codigo = dados[0].codigo;
                    item.casa = dados[0].time_casa;
                    item.fora = dados[0].time_fora;
                    item.campeonato = dados[0].campeonato;
                    item.data = dados[0].data_jogo;
                    item.hora = dados[0].horario;
                    
                    let tipo = aposta.split('_')[0].toString();
                    let novoTipo = "";
                    for(let i = 0;  i < tipo.length; i++){
                        if(tipo.charAt(i) == '-'){
                            novoTipo+=' ';
                        }else{
                            novoTipo+=tipo.charAt(i);
                        }
                    }
                    item.tipo = novoTipo;


                    item.valor = aposta.split('_')[2];                    
                    
                    if(listaAposta.length > 0){
                        console.log(listaAposta);
                        for(var i = 0; i < listaAposta.length; i++){
                            if(listaAposta[i].codigo == dados[0].codigo){
                                if(listaAposta[i].tipo == aposta.split('_')[0]){
                                    let id = aposta.split('_')[0]+"_"+aposta.split('_')[1];
                                    let blocos = document.getElementsByClassName(id);
                        
                                    for(let j = 0; j < blocos.length; j++){
                                        blocos[j].style.backgroundColor = '#9c2d44';
                                    }                       
                                    
                                    listaAposta.splice(i, 1);
                                    this.$store.commit('setApostas', listaAposta);
                                    return;
                                }else{

                                    let tipo = listaAposta[i].tipo;
                                    let novoTipo = "";
                                    for(let i = 0;  i < tipo.length; i++){
                                        if(tipo.charAt(i) == ' '){
                                            novoTipo+='-';
                                        }else{
                                            novoTipo+=tipo.charAt(i);
                                        }
                                    }

                                    let idNovo = novoTipo+"_"+listaAposta[i].codigo;
                                    let blocos = document.getElementsByClassName(idNovo);
                        
                                    for(let j = 0; j < blocos.length; j++){
                                        blocos[j].style.backgroundColor = '#9c2d44';
                                    }  
                                       

                                    let id = aposta.split('_')[0]+"_"+aposta.split('_')[1];
                                    blocos = document.getElementsByClassName(id);
                        
                                    for(let j = 0; j < blocos.length; j++){
                                        blocos[j].style.backgroundColor = '#808080';
                                    }
                        
                                    listaAposta.splice(i, 1);
                                    this.$store.commit('setApostas', listaAposta);
                                    listaAposta.push(item);
                                    this.$store.commit('setApostas', listaAposta);
                                    return;
                                }
                            }

                            let id = aposta.split('_')[0]+"_"+aposta.split('_')[1];
                            let blocos = document.getElementsByClassName(id);
                        
                            for(let j = 0; j < blocos.length; j++){
                                blocos[j].style.backgroundColor = '#808080';
                            }
                        }

                        listaAposta.push(item);
                        this.$store.commit('setApostas', listaAposta);
                    }else{                        

                        let id = aposta.split('_')[0]+"_"+aposta.split('_')[1];
                        let blocos = document.getElementsByClassName(id);
                        
                        for(let j = 0; j < blocos.length; j++){
                            blocos[j].style.backgroundColor = '#808080';
                        }
                        listaAposta.push(item);
                        this.$store.commit('setApostas', listaAposta);
                    }
                    
                });  
            },
            exibirBilhete(){               
                document.getElementById('jogos').style.display = 'none';
                document.getElementById('apostas').style.display = 'block';
            },

            exibirJogos(){               
                document.getElementById('apostas').style.display = 'none';
                document.getElementById('jogos').style.display = 'block';
            }

        }
    }
</script>


<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Slab');

     .limp{
        clear: both;
    }

    .back >{
        background-color: black;
        text-align: center;
        transition: 1s;
    }

    .cont{
        width: 95%;
        margin: 0 auto;
        background-color: black;
    }

    #box{
        position: fixed;
        bottom: 0px;
        left: 0px;
        width: 100%;
        background-color: #9c2d44;
        font-family: 'Roboto Slab', serif;
        font-size: 20px;
        color: white;
        text-align: center;
        display: none;
        
    }

    #bilhete{
        display: none;
        position: fixed;
        bottom: 10px;
        right: 20px;
        border-radius: 50%;
        background-color: rgb(19, 199, 109);
        padding: 5px;
        cursor: pointer;
    }

     #jogo{
        display: none;
        position: fixed;
        bottom: 70px;
        right: 20px;
        border-radius: 50%;
        background-color: rgb(19, 199, 109);
        padding: 5px;
        cursor: pointer;
    }

    @media screen and (max-width: 992px) {
        .cont{
            width: 100%;
            margin: 0 auto;
            background-color: black;
        }
        #jogo, #bilhete{
            display: block;
        }
    }


    @media screen and (max-width: 600px) {
        .cont{
            width: 100%;
            margin: 0 auto;
            background-color: black;
        }

        #jogo, #bilhete{
            display: block;
        }
    }
</style>
