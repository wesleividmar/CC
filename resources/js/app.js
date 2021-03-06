/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import Vue from 'vue';
import vueDebounce from 'vue-debounce';



Vue.use(vueDebounce)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vuex


Vue.component('topo', require('./components/Topo.vue').default);
Vue.component('painel', require('./components/Painel.vue').default);
Vue.component('botao', require('./components/Botoes.vue').default);
Vue.component('pagina', require('./components/Pagina.vue').default);
Vue.component('tabela-lista', require('./components/Tabela.vue').default);
Vue.component('modal', require('./components/Modal.vue').default);
Vue.component('pokemon-index', require('./components/PokemonsIndex.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
