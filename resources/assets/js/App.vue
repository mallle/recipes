<template>
    <div>

        <app-navbar></app-navbar>
        <hero></hero>

        <!--<h1 class="class 1">{{ message}}</h1>-->
        <!--<router-link to="/vue/example"><a>url to example</a></router-link>-->
        <!--<router-link to="/vue/recipes"><a>Recipes</a></router-link>-->
        <!--<router-link to="/vue/grid"><a>grid</a></router-link>-->

        <router-view></router-view>
    </div>
</template>

<script>
    import navbar from './layouts/Nav'
    import hero from './layouts/Hero'

    export default {
        data () {
            return {
                message: 'This is the home component!'
            };
        },
        components: {
            appNavbar: navbar,
            hero
        }
    };
</script>

<style lang="scss">
    @import "../../assets/sass/frontend/styles";
</style>