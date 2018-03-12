@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		@include('layouts.session')
		@include('layouts.error')
		<form method="POST" enctype="multipart/form-data" action="/ingredients/{{$ingredient->id}}" role="form" novalidate>	
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
            <div class="form-group">
              	<label for="name">Name</label>
              	<input type="text" class="form-control" id="name" name="name" value="{{$ingredient->name}}">
            </div>
			<ul class="list-inline">
				<li>					
					<div class="box-footer text-right">
						<a href="/ingredients" class="btn btn-primary">zurück</a>
					</div>
				</li>
				<li>
					<div class="box-footer text-right">
						<button type="submit" class="btn btn-primary">Edit</button>
					</div>
				</li>
			</ul>
			
		</form>

@endsection	