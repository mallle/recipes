@extends('layouts.app')

@section('content')
<div class="container">
	<div class="jumbotron">
	  	<h1 class="text-center">{{$recipe->name}}</h1>
	</div>


	@include('layouts.session')
	@include('layouts.error')
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6">
			
			<div class="panel panel-default">
				<div class="panel-body">

					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4">
							<p><i class="fas fa-users"></i> {{ $recipe->persons}}</p>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4">
							<p><i class="fas fa-clock"></i> {{ $recipe->time}}</p>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4">
							<ul class="list-inline text-right">
								<li><a href="/recipes/{{$recipe->id}}/edit" class="btn" ><i class="fas fa-edit"></i></a></li>
								<li>
									<form method="POST" enctype="multipart/form-data" action="/recipes/{{$recipe->id}}" role="form" novalidate>	
											{{ csrf_field() }}
											{{ method_field('DELETE') }}
											<button type="submit" class="btn"><i class="fas fa-trash-alt"></i></button>
									</form>
								</li>
							</ul>
						</div>
					</div>
					
					<h4>Zutaten</h4>
					<table class="table">
						
						@foreach($recipe->ingredients as $ingredient)
						<tr>
							<td>
								{{$ingredient->name}}
							</td>
							<td>
								{{App\RecipeIngredients::amountPersons($ingredient->pivot->amount, $recipe->id)}} 
								@if($ingredient->pivot->type === App\RecipeIngredients::TYPE_GRAMM)
									Gramm
									@elseif($ingredient->pivot->type === App\RecipeIngredients::TYPE_STÜCK)
									Stück
									@elseif($ingredient->pivot->type === App\RecipeIngredients::TYPE_TEELÖFFEL)
									Teelöffel
									@elseif($ingredient->pivot->type === App\RecipeIngredients::TYPE_ESSLÖFFEL)
									Esslöffel
									@elseif($ingredient->pivot->type === App\RecipeIngredients::TYPE_LITER)
									Liter
									@elseif($ingredient->pivot->type === App\RecipeIngredients::TYPE_DECILITER)
									Deciliter
									@elseif($ingredient->pivot->type === App\RecipeIngredients::TYPE_MILLILITER)
									Milliliter
									@elseif($ingredient->pivot->type === App\RecipeIngredients::TYPE_PACKUNG)
									Packung
									@endif
							</td>
							<td>
								<form method="POST" enctype="multipart/form-data" action="/recipes/{{$recipe->id}}/detach_ingredient/{{$ingredient->id}}" role="form" novalidate>	
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button class="btn"><i class="fas fa-trash-alt"></i></button>
								</form>
							</td>
						</tr>
						@endforeach
					</table>
					<hr>
					<h4>Anleitung</h4>
					<p>{{ $recipe->description }}</p>
					<hr>
					<h4>Tags</h4>
					<table class="table">
						
						@foreach($recipe->tags as $tag)
						<tr>
							<td>
								<ul class="list-inline">
									<li>
										<i class="fas fa-tag"></i> {{$tag->name}}
									</li>
									<li>
										<form method="POST" enctype="multipart/form-data" action="/recipes/{{$recipe->id}}/detach_tag/{{$tag->id}}" role="form" novalidate>	
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button class="btn"><i class="fas fa-trash-alt"></i></button>
										</form>
									</li>
								</ul>
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Zutaten hinzufügen</h3>
				  </div>
				<div class="panel-body">
					<form method="POST" enctype="multipart/form-data" action="/recipes/{{ $recipe->id }}/attach_ingredient" role="form" novalidate>  
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                        <div class="form-group">
		                    <select name="ingredient_id">
		                        <option selected disabled>Wähle Ingredients</option>
		                        @foreach($ingredients as $ingedient)
		                            <option value="{{$ingedient->id}}">{{$ingedient->name}}</option>
		                        @endforeach
		                    </select>
	               		</div>
						<div class="form-group">
		                  	<label for="amount">Amount</label>
		                  	<input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
		                </div>
		                <div class="form-group">
							<select name="type" class="form-control">
								<option>Gramm</option>
								<option>Stück</option>
								<option>Teelöffel</option>
								<option>Esslöffel</option>
								<option>Liter</option>
								<option>Deciliter</option>
								<option>Milliliter</option>
								<option>Packung</option>
							</select>
						</div>
	                    <input type="submit" value="Hinzufügen" class="btn btn-primary"></input>
	                </form>
		        </div>
			</div>
			<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Neue Tags hinzufügen</h3>
				  </div>
				<div class="panel-body">
					<form method="POST" enctype="multipart/form-data" action="/recipes/{{ $recipe->id }}/attach_tag" role="form" novalidate>  
	                            {{ csrf_field() }}
	                            {{ method_field('POST') }}
			                <div class="form-group">
		                    <select name="tag_id">
		                        <option selected disabled>Wähle Tags</option>
		                        @foreach($tags as $tag)
		                            <option value="{{$tag->id}}">{{$tag->name}}</option>
		                        @endforeach
		                    </select>
	               		</div>
	                    <input type="submit" value="Hinzufügen" class="btn btn-primary"></input>
	                </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection










{{-- 








@extends('layouts.app')

@section('content')
<div class="container">
		@include('layouts.session')
		@include('layouts.error')
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<h1>{{ $recipe->name}} </h1>
				<ul class="list-inline">
					<li><a href="/recipes/{{$recipe->id}}/edit" class="btn" ><i class="fas fa-edit"></i>

</a></li>
					<li>
						<form method="POST" enctype="multipart/form-data" action="/recipes/{{$recipe->id}}" role="form" novalidate>	
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
								<button type="submit" class="btn" style="background:aliceblue"><i class="fas fa-trash-alt"></i></button>
						</form>
					</li>
				</ul>
				
				<p>Persons: {{ $recipe->persons}}</p>
				<p>{{ $recipe->time}} Min</p>
				<p>{{ $recipe->description}}</p>
				
				<h3>Ingredients</h3>
				


				<h3>Tags</h3>
				@foreach($recipe->tags as $tag)
					<ul class="list-inline">
						<li>{{$tag->name}}</li>
						<li>
							<form method="POST" enctype="multipart/form-data" action="/recipes/{{$recipe->id}}/detach_tag/{{$tag->id}}" role="form" novalidate>	
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button class="btn btn-danger">Delete</button>
							</form>
						</li>
					</ul>
				@endforeach
			</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	        <div class="panel panel-default">
	            <div class="panel-body">
	                <div class="panel-body">
                		<table class="table">
                            <thead>
                                <tr>
                                    <th>Tags</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                            		<td>
                            			<div class="box box-primary">
						                	<form method="POST" enctype="multipart/form-data" action="/recipes/{{ $recipe->id }}/attach_tag" role="form" novalidate>  
						                            {{ csrf_field() }}
						                            {{ method_field('POST') }}
						                        <div class="form-group">
								                    <select name="tag_id">
								                        <option selected disabled>Wähle Tags</option>
								                        @foreach($tags as $tag)
								                            <option value="{{$tag->id}}">{{$tag->name}}</option>
								                        @endforeach
								                    </select>
							               		</div>
							                    <input type="submit" value="Hinzufügen" class="btn btn-primary"></input>
							                </form>
									    </div> 
                            		</td>
                            	</tr>
                            </tbody>
                        </table>
		          	</div>
		        </div>
	            <div class="panel-body">
	                <div class="panel-body">
                		<table class="table">
                            <thead>
                                <tr>
                                    <th>Ingredients</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                            		<td>
                            			<div class="box box-primary">
						                	<form method="POST" enctype="multipart/form-data" action="/recipes/{{ $recipe->id }}/attach_ingredient" role="form" novalidate>  
						                            {{ csrf_field() }}
						                            {{ method_field('POST') }}
						                        <div class="form-group">
								                    <select name="ingredient_id">
								                        <option selected disabled>Wähle Ingredients</option>
								                        @foreach($ingredients as $ingedient)
								                            <option value="{{$ingedient->id}}">{{$ingedient->name}}</option>
								                        @endforeach
								                    </select>
							               		</div>
												<div class="form-group">
								                  	<label for="amount">Amount</label>
								                  	<input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
								                </div>
								                <div class="form-group">
													<select name="type" class="form-control">
													  <option>Gramm</option>
													  <option>Stück</option>
													  <option>Teelöffel</option>
													  <option>Esslöffel</option>
													  <option>Liter</option>
													  <option>Deciliter</option>
													  <option>Milliliter</option>
													  <option>Packung</option>
													</select>
												</div>
							                    <input type="submit" value="Hinzufügen" class="btn btn-primary"></input>
							                </form>
									    </div> 
                            		</td>
                            	</tr>
                            </tbody>
                        </table>
		          	</div>
		        </div>
		    </div>		
		</div>
		 <a href="/recipes" value="upload" class="btn btn-primary">Zurück</a>
	</div>

@endsection	 --}}