<template>
    <div>
        <h1 class="class1">This shows that the route is really working!!</h1>
        {{ message }}
        <router-link to="/vue"><a>Back to the root</a></router-link>
    </div>
</template>
<script>
    export default {
        data () {
            return {
                message: 'Hoera!!!!'
            };
        }
    };
</script>