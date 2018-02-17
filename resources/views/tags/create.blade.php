@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<form method="POST" enctype="multipart/form-data" action="{{ route('tags.store')}}" role="form" novalidate>	
				{{ csrf_field() }}
				{{-- {{ method_field('POST') }} --}}
                <div class="form-group">
                  	<label for="name">Name</label>
                  	<input type="text" class="form-control" id="name" name="name" placeholder="Tagname">
                </div>
				<div class="form-group">
					<select name="type" class="form-control">
					  <option>Kategorie</option>
					  <option>Zubereitung</option>
					  <option>Zeit</option>
					  <option>Fleisch</option>
					</select>
				</div>
			
			<div class="box-footer text-right">
				<button type="submit" class="btn btn-primary">Add</button>
			</div>
		</form>

@foreach($tags as $tag)
<ul>
	<li>
		
		@if( $tag->type == 1)
		<b>Kategorie</b>
		@elseif( $tag->type == 2)
		<b>Zubereitung</b>
		@elseif( $tag->type == 2)
		Zeit
		@elseif( $tag->type == 2)
		Fleisch
		@endif
		{{ $tag->name }}
	</li>

</ul>

@endforeach

@endsection	