<template>
    <div>
        <h1 v-for="recipe in recipes"> {{ recipe }}</h1>
    </div>
</template>

<script>
export default {
    name: "recipe",
    
    data() {
        return {
            recipe: ''
        }
    },
    created() {
        axios.get('/api/recipes').then(response => this.recipe = response.data);
    }


}

</script>

<style>

</style>