<template>
    <div>

        <h1 class="class 1">{{ message}}</h1>
        <router-link to="/vue/example"><a>url to example</a></router-link>
        <router-link to="/vue/example2"><a>url to example2</a></router-link>


    </div>
</template>

<script>
    export default {
        data () {
            return {
                message: 'This is the home component!'
            };
        }
    };
</script>

<style lang="scss">
@import "../../sass/frontend/styles";

</style>