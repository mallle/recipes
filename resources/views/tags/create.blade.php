@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		@include('layouts.session')
		@include('layouts.error')
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
<ul class="list-inline">
	<li>
		@if( $tag->type == 1)
		<b>Kategorie</b>
		@elseif( $tag->type == 2)
		<b>Zubereitung</b>
		@elseif( $tag->type == 3)
		<b>Zeit</b>
		@elseif( $tag->type == 4)
		<b>Fleisch</b>
		@endif
		{{ $tag->name }}
	</li>
	<li><a href="/tags/{{$tag->id}}/edit" class="btn btn-primary">edit</a></li>
	<li>
		<form method="POST" enctype="multipart/form-data" action="/tags/{{$tag->id}}" role="form" novalidate>	
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<button class="btn btn-danger">delete</button>
		</form>
	</li>
</ul>

@endforeach

@endsection	