<template>
    <div class="row">
        <div class="col-1-of-2"  v-for="recipe in recipes">
            <h1>{{ recipe.name}}</h1>
                <ul>
                    <li>
                        Personen: {{ recipe.persons}}
                    </li>
                    <li>
                        <img src=""> {{ recipe.persons}}
                    </li>
                    <li v-for="description in recipe.descriptions">
                        {{ description.descriptionnumber }}. {{ description.description}}
                    </li>
                    <li v-for="ingredient in recipe.ingredients">
                        {{ ingredient.name }} Amount: {{ ingredient.amount}} {{ingredient.type}}
                    </li>
                    <li v-for="tag in recipe.tags">
                        {{ tag.name }}
                    </li>

                </ul>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                recipes: []
            }

        },
        mounted() {
            axios.get('/api/recipes').then(response => this.recipes = response.data);
        }

    }
</script>

<style lang="scss" scoped>


</style>
