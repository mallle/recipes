@extends('layouts.app')

@section('content')
<div class="container">
	<div class="jumbotron">
	  	<h1 class="text-center">Zutat editieren</h1>
	</div>
	<div class="row">
		<div class="col-md-offset-3 col-xs-12 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-body">
					@include('layouts.session')
					@include('layouts.error')
					<form method="POST" enctype="multipart/form-data" action="/ingredients/{{$ingredient->id}}" role="form" novalidate>	
							{{ csrf_field() }}
							{{ method_field('PATCH') }}
			            <div class="form-group">
			              	<label for="name">Zutat</label>
			              	<input type="text" class="form-control" id="name" name="name" value="{{$ingredient->name}}">
			            </div>
			            <div class="box-footer text-right">
							<button type="submit" class="btn btn-primary">Edit</button>
						</div>
					</form>
				</div>
			</div>
			<div class="box-footer ">
				<a href="/ingredients" class="btn btn-primary">Zurück</a>
			</div>
		</div>
	</div>
</div>
@endsection
						