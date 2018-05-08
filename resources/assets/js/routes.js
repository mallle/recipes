import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./views/Recipes.vue')
    },
    {
        path: '/search',
        component: require('./views/Search.vue')
    },

    {
        path: '/tags',
        component: require('./views/Tags.vue')
    },
    {
        path: '/recipe/:id',
        name: 'recipe',
        component: require('./views/Recipe')
    }
];

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});