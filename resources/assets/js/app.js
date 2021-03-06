
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });

window.axios = require('axios');

import Vue from 'vue'
import App from "./App.vue";
import VueRouter from 'vue-router';

import { store } from './store/store'

import { routes } from './routes';

import "../sass/frontend/styles.scss";

Vue.use(VueRouter);


const router = new VueRouter({
    mode: 'history',
    routes
});

// new Vue({
//     el: '#app',
//     router,
// });

new Vue({
    router,
    store,
    render: h => h(App)
}).$mount("#app");