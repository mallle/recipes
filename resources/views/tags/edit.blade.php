@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		@include('layouts.session')
		@include('layouts.error')
		<form method="POST" enctype="multipart/form-data" action="/tags/{{$tag->id}}" role="form" novalidate>	
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
            <div class="form-group">
              	<label for="name">Name</label>
              	<input type="text" class="form-control" id="name" name="name" value="{{$tag->name}}">
            </div>
			<div class="form-group">
				<label for="type">Wähle eine typ
					<select name="type" class="form-control" >
					  	<option>Kategorie</option>
					  	<option>Zubereitung</option>
					  	<option>Zeit</option>
					  	<option>Fleisch</option>
					</select>
				</label>
			</div>
			<ul class="list-inline">
				<li>					
					<div class="box-footer text-right">
						<a href="/tags" class="btn btn-primary">zurück</a>
					</div>
				</li>
				<li>
					<div class="box-footer text-right">
						<button type="submit" class="btn btn-primary">Add</button>
					</div>
				</li>
			</ul>
			
		</form>

@endsection	