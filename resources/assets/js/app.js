
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vuex from 'Vuex';
Vue.use(Vuex);

const store = new Vuex.Store({
    state:{
        partidas:{},
        jogos:{},
        apostas: [],
        oddsTempoNormal:[]
    },
    mutations:{
        setPartidas(state, obj){
            state.partidas = obj;
        },
        setJogos(state, obj){
            state.jogos = obj;
        },
        setApostas(state, obj){
            state.apostas = obj;
        },
        setOddsTempoNormal(state, obj){
            state.oddsTempoNormal = obj;
        }
    }
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('pagina', require('./components/Pagina.vue'));
Vue.component('paineljogos', require('./components/PainelJogos.vue'));
Vue.component('painelcotacoes', require('./components/PainelCotacoes.vue'));
Vue.component('painelcampeonatos', require('./components/PainelCampeonatos.vue'));
Vue.component('painelaposta', require('./components/PainelAposta.vue'));
Vue.component('menujogo', require('./components/Menu.vue'));
Vue.component('campeonato', require('./components/Campeonato.vue'));
Vue.component('cotacoes', require('./components/Cotacoes.vue'));
Vue.component('jogo', require('./components/Jogo.vue'));
Vue.component('aposta', require('./components/Aposta.vue'));
Vue.component('preloading', require('./components/PreLoading.vue'));
Vue.component('cabecalho', require('./components/Cabecalho.vue'));
Vue.component('rodape', require('./components/Rodape.vue'));


const app = new Vue({
    el: '#app',
    store
});
