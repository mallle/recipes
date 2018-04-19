import VueRouter from 'vue-router'
import Recipes from '../components/Recipes.vue'

const router = new VueRouter({
    linkActiveClass: 'active',
    mode: 'history', // do not use /#/.
    routes: [

        { path: '/', component: Recipes }

    ]
})