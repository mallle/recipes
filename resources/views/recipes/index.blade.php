@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		@include('layouts.session')
		@include('layouts.error')
		@foreach($recipes as $recipe)
    <ul>
      <li>{{ $recipe->name}}</li>
    </ul>
    @endforeach

@endsection	