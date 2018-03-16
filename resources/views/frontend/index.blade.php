@extends('frontend.master')

@section('content')
		<section class="section" id="app">
			<div class="container">
				<div class="columns is-desktop">
					<div class="column"  v-for="recipe in recipes">
						<article class="column notification is-link">
							<div class="card">
								<div class="card-image">
									<figure class="image is-4by3">
										<img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
									</figure>
								</div>
								<div class="card-content">
									<div class="media">

										<div class="media-content">
											<p class="title is-4">@{{ recipe.name }}</p>
										</div>
									</div>

									<div class="content">

										<a href="#">#css</a> <a href="#">#responsive</a>
										<br>
										<time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>


















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