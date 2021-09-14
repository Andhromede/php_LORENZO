
	<?php
		// require_once($_SERVER["DOCUMENT_ROOT"]."/MyData/data.php");
		// session_start();
		require_once("../../MyData/data.php");
		require_once("../../db/db.php");
		include_once("../../dao/Horaires.php");
	?>

	<!DOCTYPE html>

	<html lang="fr">

	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="../../css/general.css">
	<link rel="stylesheet" href="../../css/navbar.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">



	<title><?= $titre ?? "Accueil" ?></title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

	</head>

	<body>


	<nav class="navbar navbar-expand-lg bgColor navbar-dark container-fluid fixed-top">
		<span class="navbar-brand title font-weight-bolder" href="#">Pizzeria Lorenzo</span>
		<span class="separateur ml-5"></span>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-5">

				<li class="nav-item mr-4 li">
					<a class="nav-link a-class " href='../<?= $linkAccueil ?>'>Accueil</a>
				</li>

				<li class="nav-item mr-4 li">
					<a class="nav-link a-class " href='../<?= $linkCarte ?>'>Notre Carte</a>
				</li>

				<?php
					date_default_timezone_set('Europe/Paris'); //evite le decalage horraire
					
					function convertHeure($value){
						if(!empty($value) ||  $value != null) {
							$debut = substr($value,0, 5);
							$fin = substr($value,8, 5);
							$tab = [$debut, $fin];
						}return $tab;
					}

					/* FONCTION D'HEURE D'OUVERTURE & FEMETURE */
					function isWebsiteOpen() {
						$heure = microtime(true);
						$jour = date('N');
						$dbh = connexion();
						$horaires = " SELECT * FROM `horaire` ";
						$rst = false;

						foreach($dbh->query($horaires) as $data){
							if($data['numJour'] == $jour ){
								if($data['ouverture'] == 1){
									if($heure >= strtotime(substr($data['heureAM'],0, 5)) && $heure <= strtotime(substr($data['heureAM'],8, 5))){
										$rst = true;
									}elseif ($heure >= strtotime(substr($data['heurePM'],0, 5)) && $heure <= strtotime(substr($data['heurePM'],8, 5))){
										$rst = true;
									}else{
										$rst = false;
									}
								}
							}	
						}

						// $rst = (date('Gi') >= 1100 && date('Gi') < 2359 || date('N') >= 5 && date('Gi') >= 1700 && date('Gi') < 2359) ? true : false;
						return $rst;	
					}
 
					echo((isWebsiteOpen() == true) ?  "<font color='#4CD4B0'>ouvert</font>" : "<font color='#F24D16'>fermé</font>");
				?>

				<li class="nav-item mr-4 li">
					<a class="nav-link a-class" href="../<?= $linkHoraire ?>">Nos horaires</a>
				</li>
				
				<li class="nav-item mr-4 li">
					<a class="nav-link a-class" href="">Ou sommes nous?</a>
				</li>

				<li class="nav-item mr-4 li">
					<a class="nav-link a-class" href="../<?= $linkContact ?>">Nous contacter</a>
				</li>

				<ul class="navbar-nav user">
					<li class="nav-item dropdown dropdown li">

						<?php if(isset($_SESSION['login']) && !empty($_SESSION['login']) && $_SESSION['role'] == 1 ): ?> 
							<a class="nav-link dropdown-toggle a-class" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Administration
							</a>
						<?php endif; ?>

						<div class="dropdown-menu bgColor bgMini" aria-labelledby="navbarDropdown">
							<a class="dropdown-item sousMenu text-white" href="listeProduits.php">Liste des produits</a>
							<a class="dropdown-item a-class" href="#"></a>
						</div>
					</li>
				</ul>

			</ul>

			<ul class="navbar-nav user">
				<li class="nav-item dropdown dropleft li">
					<a class="nav-link dropdown-toggle a-class" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php 
							if(isset($_SESSION['login']) && !empty($_SESSION['login'])): 
								echo($_SESSION['login']);
							else:
								echo("Utilisateur"); 
							endif;
						?>
					</a>

					<div class="dropdown-menu bgColor bgMini" aria-labelledby="navbarDropdown">
						<?php if(isset($_SESSION['login']) && !empty($_SESSION['login'])): ?>
							<a class="dropdown-item sousMenu text-white" href="#">Mon profil</a>
							<a class="dropdown-item sousMenu text-white" href="../compte/deconnexion.php">Deconnexion</a>
						<?php endif; ?>

						<?php if(!isset($_SESSION['login']) || empty($_SESSION['login'])): ?> 
								<a class="dropdown-item sousMenu text-white" href="../compte/inscription.php">Inscription</a>
								<a class="dropdown-item sousMenu text-white" href="../compte/connexion.php">Connexion</a>
						<?php endif; ?>
					</div>
				</li>
			</ul>
		</div>
	
	</nav>

