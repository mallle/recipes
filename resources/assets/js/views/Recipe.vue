<template>
    <div>
        <p>Number of Ciks: {{ clicks }}</p>
        <h1>{{ counter }}</h1>
        <h1>{{ recipe }}</h1>
        <h2 v-for="ingredient in recipe.ingredients">{{ ingredient.name}}</h2>
    </div>
</template>

<script>

export default {
    name: "Recipe",

    data() {
        return {
            recipe: {}
        }
    },

    computed: {
      counter(){
          return this.$store.state.doubleCounter;
      },
        clicks(){
            return this.$store.state.stingCounter;
        }
    },
    created() {
        this.fetchData();
    },

    watch: {
        '$route': 'fetchData'
    },

    methods: {
        async fetchData() {

            axios.get('/api/recipes/'+ this.$route.params.id)
                .then((resp) => {
                    this.recipe = resp.data[0];
                    console.log(response.data);
                    console.log(response.status);
                    console.log(response.statusText);
                    console.log(response.headers);
                    console.log(response.config);
                    console.log(resp);
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