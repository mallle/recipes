<template>

    <main class="u-margin-top-big">
        <div class="row">
            <div class="col-1-of-3" v-for="recipe in recipes">
                {{ recipe }}
                <card :image="recipe.image">

                    <template slot="header">{{recipe.name }}</template>

                    <li slot="list-item" v-for="ingredient in recipe.ingredients">{{  ingredient.name }}</li>

                    <router-link slot="link" :to="{ name: 'recipe', params: { id: recipe.id }}">Anleitung &rarr;</router-link>

                </card>
            </div>
        </div>

        <button @click="increment()">click</button>

    </main>
    <!--<section class="section">-->
        <!--<div class="container">-->
            <!--<div class="columns notification is-light is-variable is-multiline">-->
                <!--<div class="column is-4" v-for="recipe in recipes">-->
                    <!--<div class="card">-->
                        <!--<div class="card-image">-->
                            <!--<figure class="image is-4by3">-->
                                <!--<img :src="recipe.image" alt="Placeholder image">-->
                            <!--</figure>-->
                        <!--</div>-->
                        <!--<div class="card-content">-->
                            <!--<div class="media">-->
                                <!--<div class="media-left">-->
                                <!--</div>-->
                                <!--<div class="media-content">-->
                                    <!--<router-link :to="{ name: 'recipe', params: { id: recipe.id }}"><p class="title is-4">{{ recipe.name }}</p></router-link>-->
                                    <!--<div class="columns">-->
                                        <!--<div class="column">-->
                                            <!--<i class="fas fa-users"></i> {{ recipe.persons }}-->
                                        <!--</div>-->
                                        <!--<div class="column">-->
                                            <!--<i class="fas fa-stopwatch"></i> {{ recipe.preparationtime }} Minuten-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    <!--</section>-->
</template>

<script>
    import card from '../components/Card'

    export default {
        name: "Recipes",

        data() {
            return {
                recipes: ''
            }
        },
        created() {
            axios.get('/api/recipes').then(response => this.recipes = response.data);
        },
        components: {
            card
        },
        methods: {
            increment() {
                this.$store.state.couter++;
            }
        }
    }
</script>