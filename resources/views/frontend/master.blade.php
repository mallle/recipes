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
	<section class="hero is-primary is-medium">
		<!-- Hero head: will stick at the top -->
		<div class="hero-head">
			<nav class="navbar">
				<div class="container">
					<dsiv class="navbar-brand">
						<a class="navbar-item">
							<img src="" alt="">
						</a>
						<span class="navbar-burger burger" data-target="navbarMenuHeroA">
							<span></span>
							<span></span>
							<span></span>
					  	</span>
					</dsiv>
					<div id="navbarMenuHeroA" class="navbar-menu">
						<div class="navbar-end">
							<a class="navbar-item is-active">
								Home
							</a>
							<a class="navbar-item">
								Examples
							</a>
							<span class="navbar-item">
							</span>
						</div>
					</div>
				</div>
			</nav>
		</div>

		<!-- Hero content: will be in the middle -->
		<div class="hero-body">
			<div class="container has-text-centered">
				<h1 class="title">
					Meine Rezepte
				</h1>
				<h2 class="subtitle">
					-a little taste of heaven every day
				</h2>
			</div>
		</div>
		<!-- Hero footer: will stick at the bottom -->
		<div class="hero-foot">
			<nav class="tabs is-boxed">
				<div class="container">
					<ul>
						<li class="is-active"><a>Rezepte</a></li>
						<li><a>Suchen</a></li>
						<li><a>Kategorien</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</section>

	@yield('content')

    <!-- Scripts -->
	<script src="{{ mix('js/recipes.js') }}"></script>

	</body>
</html>




