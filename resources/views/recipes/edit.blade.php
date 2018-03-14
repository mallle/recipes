@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		@include('layouts.session')
		@include('layouts.error')
		<form method="POST" enctype="multipart/form-data" action="/recipes/{{$recipe->id}}" role="form" novalidate>	
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
      <div class="form-group">
        	<label for="name">Name</label>
        	<input type="text" class="form-control" id="name" name="name" value="{{$recipe->name}}">
      </div>
      <div class="form-group">
        	<label for="persons">Persons</label>
        	<input type="text" class="form-control" id="persons" name="persons" value="{{$recipe->persons}}">
      </div>
      <div class="form-group">
        	<label for="description">Description</label>
        	<input type="text" class="form-control" id="description" name="description" value="{{$recipe->description}}">
      </div>
      <div class="form-group">
        	<label for="time">Minuten</label>
        	<input type="text" class="form-control" id="time" name="time" value="{{$recipe->time}}">
      </div>
  		<div class="box-footer text-right">
  			<ul class="list-inline">
          <li>          
            <div class="box-footer text-left">
              <a href="/recipes/{{$recipe->id}}" class="btn btn-primary">zurück</a>
            </div>
          </li>
          <li>
            <div class="box-footer text-right">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </li>
        </ul>
  		</div>
		</form>

@endsection	