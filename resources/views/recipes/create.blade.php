@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		@include('layouts.session')
		@include('layouts.error')
		<form method="POST" enctype="multipart/form-data" action="{{ route('recipes.store')}}" role="form" novalidate>	
				{{ csrf_field() }}
				{{-- {{ method_field('POST') }} --}}
                <div class="form-group">
                  	<label for="name">Name</label>
                  	<input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                  	<label for="persons">Persons</label>
                  	<input type="text" class="form-control" id="persons" name="persons" placeholder="Persons">
                </div>
                <div class="form-group">
                  	<label for="description">Description</label>
                  	<input type="text" class="form-control" id="description" name="description" placeholder="Description">
                </div>
                <div class="form-group">
                  	<label for="time">Minuten</label>
                  	<input type="text" class="form-control" id="time" name="time" placeholder="Minutes">
                </div>
			<div class="box-footer text-right">
				<button type="submit" class="btn btn-primary">Add</button>
			</div>
		</form>

@endsection	