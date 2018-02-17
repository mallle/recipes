@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6">
			@foreach($ingredients as $ingredient)
				<ul>
					<li>
						{{ $ingredient->name }}
					</li>
				</ul>
			@endforeach
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<form method="POST" enctype="multipart/form-data" action="{{ route('ingredient.store')}}" role="form" novalidate>	
					{{ csrf_field() }}
					{{-- {{ method_field('POST') }} --}}
	                <div class="form-group">
	                  	<label for="name">Name</label>
	                  	<input type="text" class="form-control" id="name" name="name" placeholder="Zutat">
	                </div>
				<div class="box-footer text-right">
					<button type="submit" class="btn btn-primary">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection