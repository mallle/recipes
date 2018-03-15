<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Meine Rezepte</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	</head>
	<body>
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
	</body>
</html>