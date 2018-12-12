import Home from './components/Home'
import Example from './components/Example.vue';
import Example2 from './components/ExampleComponent';

export const routes = [

    { path: '/vue', component: Home, name: 'Home' },
    { path: '/vue/example', component: Example, name: 'Example' },
    { path: '/vue/example2', component: Example2, name: 'Example2' }

];