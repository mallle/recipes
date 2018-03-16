@extends('frontend.master')

@section('content')
		<section class="section" id="app">
			<div class="container">
			  <h1 class="title" v-for="recipe in recipes">
			  	<ul>
			  		<li>
			  			Rezept: @{{ recipe.name}}
			  		</li>
			  		<li>
			  			Personen: @{{ recipe.persons}}
			  		</li>
			  		<li>
			  			<img src=""> @{{ recipe.persons}}
			  		</li>
			  		<li v-for="description in recipe.descriptions">
			  			@{{ description.descriptionnumber }}. @{{ description.description}}
			  		</li>
			  		<li v-for="ingredient in recipe.ingredients">
			  			@{{ ingredient.name }} Amount:@{{ ingredient.amount}} @{{ingredient.type}}
			  		</li>
			  		<li v-for="tag in recipe.tags">
			  			@{{ tag.name }}
			  		</li>
			  		
			  	</ul>
			    
			  </h1>
			  <p class="subtitle">
			    
			  </p>
			</div>
		</section>

		<script src="https://unpkg.com/vue@2.0.3/dist/vue.js"></script>
		<script src="https://unpkg.com/axios@0.12.0/dist/axios.min.js"></script>
		<script src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>

	  	<script>
		    new Vue({
			    el: '#app',
			    data: {
			    	recipes: [],
			    },
		       	mounted() {
		        	axios.get('/api/recipes').then(response => this.recipes = response.data);
			    }
		    })
  		</script>
@endsection