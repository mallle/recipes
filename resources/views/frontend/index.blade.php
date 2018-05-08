@extends('frontend.master')

@section('content')

	<div id="app">

		<section class="section">
			<div class="container">
				<router-view></router-view>
			</div>
		</section>

	</div>

@endsection