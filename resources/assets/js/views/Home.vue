<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="title" v-for="recipe in recipes">
                        <ul>
                            <li>
                                Rezept: {{ recipe.name}}
                            </li>
                            <router-link :to="{ name: 'recipe', params: { id: recipe.id }}">{{ recipe.name }}</router-link>

                            <li>
                                Personen: {{ recipe.persons}}
                            </li>
                            <li>
                                <img src="require({{ recipe.image }})">
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
            </div>
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
            console.log('test');
            axios.get('/api/recipes').then(response => this.recipes = response.data);

        }

    }
</script>

<style lang="scss" scoped>


</style>
