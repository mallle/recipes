<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Meine Rezepte</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	</head>
	<body>
		<nav class="navbar is-transparent">
		  	<div class="navbar-brand">
		    	<a class="navbar-item" href="/">
		      		<img src="" alt="" width="112" height="28">
		    	</a>
			    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
					<span></span>
					<span></span>
					<span></span>
			    </div>
		  	</div>

			<div id="navbarExampleTransparentExample" class="navbar-menu">
				<div class="navbar-start">
					<a class="navbar-item" href="https://bulma.io/">
						
					</a>
					<a class="navbar-item" href="https://bulma.io/">
						Home
					</a>
					<a class="navbar-item" href="https://bulma.io/">
						Home
					</a>
				</div>
			</div>
		</nav>

     @yield('content')


    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
</html>




