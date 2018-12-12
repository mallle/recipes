<template>
    <div>
        <h1>{{ recipe.name }}</h1>
        <h2 v-for="ingredient in recipe.ingredients">{{ ingredient.name}}</h2>
    </div>
</template>

<script>
export default {
    name: "Recipe",

    data() {
        return {
            recipe: ''
        }
    },

    created() {
        this.fetchData()
    },

    watch: {
        '$route': 'fetchData'
    },

    methods: {
        fetchData() {
            axios.get('api/recipes/'+this.$route.params.id+'/')
                .then((resp) => {
                    this.recipe = resp.data[0]
                    console.log(resp)
                })
                .catch((err) => {
                    console.log(err)
                })
        }
    }
}

</script>

<style>

</style>