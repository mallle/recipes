@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		@include('layouts.session')
		@include('layouts.error')

		<h1>All Recipes</h1>
		<a href="recipes/create">Add new recipe</a>
		@foreach($recipes as $recipe)
		<ul class="list-inline">
			<li><a href="/recipes/{{$recipe->id}}">{{ $recipe->name}}</a></li>
		</ul>
    @endforeach
@endsection	