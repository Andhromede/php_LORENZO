
	<?php
		// require_once($_SERVER["DOCUMENT_ROOT"]."/MyData/data.php");
		require_once("../../MyData/data.php");
		require_once("../../db/db.php");
		include_once("../../dao/Horaires.php");
	?>

	<link rel="stylesheet" href="../../css/navbar.css">
	<link rel="stylesheet" href="../../css/general.css">


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
						<a class="nav-link dropdown-toggle a-class" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Administration
						</a>

						<div class="dropdown-menu bgColor bgMini" aria-labelledby="navbarDropdown">
							<a class="dropdown-item a-class" href="listeProduits.php">Liste des produits</a>
							<a class="dropdown-item a-class" href="#"></a>
						</div>
					</li>
				</ul>

			</ul>

			<ul class="navbar-nav user">
				<li class="nav-item dropdown dropleft li">
					<a class="nav-link dropdown-toggle a-class" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Utilisateur
					</a>

					<div class="dropdown-menu bgColor bgMini" aria-labelledby="navbarDropdown">
						<a class="dropdown-item a-class" href="#">Mon profil</a>
						<a class="dropdown-item a-class" href="../compte/inscription.php">Inscription</a>
						<a class="dropdown-item a-class" href="../compte/connexion.php">Connexion</a>
						<a class="dropdown-item a-class" href="#">Deconnexion</a>
					</div>
				</li>
			</ul>
		</div>
	
	</nav>

