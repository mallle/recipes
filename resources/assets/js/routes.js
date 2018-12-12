import Home from './components/Home.vue'
import Example from './components/Example.vue';
import Recipes from './pages/Recipes';

export const routes = [

    { path: '/vue/grid', component: Home, name: 'Home' },
    { path: '/vue/example', component: Example, name: 'Example' },
    { path: '/vue/recipes', component: Recipes, name: 'Recipes' }

];