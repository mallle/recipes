// import Home from './components/Home.vue'
// import Example from './components/Example.vue';
import Recipes from './views/Recipes';
import Recipe from './views/Recipe';
import Search from './views/Search';

export const routes = [

    // { path: '/vue/grid', component: Home, name: 'Home' },
    // { path: '/vue/example', component: Example, name: 'Example' },
    { path: '/vue/rezepte', component: Recipes, name: 'Recipes' },
    { path: '/vue/rezepte/:id', component: Recipe, name: 'recipe' },
    { path: '/vue/suche', component: Search, name: 'search' }

];