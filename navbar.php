
	<nav class="navbar navbar-expand-lg bgColor navbar-dark container-fluid fixed-top">
		<span class="navbar-brand title font-weight-bolder" href="#">Pizzeria Lorenzo</span>
		<span class="separateur ml-5"></span>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<ul class="navbar-nav ml-5">

				<li class="nav-item mr-4 li">
					<a class="nav-link a-class " href="{{path('recherchesVoyages')}}">Accueil</a>
				</li>

				<li class="nav-item dropdown li mr-4">
					<a class="nav-link dropdown-toggle a-class" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Notre carte
					</a>

					<div class="dropdown-menu bgColor bgMini" aria-labelledby="navbarDropdown">
						<a class="dropdown-item text-light  a-class" href="{{path('mesVoyages')}}">Notre entrées</a>
						<!-- <div class="dropdown-divider"></div> -->
						<a class="dropdown-item text-light a-class" href="{{path('creationVoyage')}}">Nos pizzas</a>
						<a class="dropdown-item text-light a-class" href="#">Nos dessert</a>
						<a class="dropdown-item text-light a-class" href="#">Nos boissons</a>
					</div>
				</li>

				<li class="nav-item mr-4 li">
					<a class="nav-link a-class" href="{{path('voyages')}}">Nous contacter</a>
				</li>

				<li class="nav-item mr-4 li">
					<a class="nav-link a-class" href="{{path('voyages')}}">Nos horaires</a>
				</li>

				<li class="nav-item mr-4 li">
					<a class="nav-link a-class" href="#">Ou sommes nous?</a>
				</li>

			</ul>

			<ul class="navbar-nav user">
				<li class="nav-item dropdown dropleft li">
					<a class="nav-link dropdown-toggle a-class" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Utilisateur
					</a>

					<div class="dropdown-menu bgColor bgMini" aria-labelledby="navbarDropdown">
						<a class="dropdown-item a-class" href="{{path('profil')}}">Mon profil</a>
						<a class="dropdown-item a-class" href="#">Deconnexion</a>
					</div>
				</li>
			</ul>
		</div>

	</nav>

