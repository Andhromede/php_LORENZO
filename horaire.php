<?php
    require_once("MyData/data.php");
    $titre = $titreHoraire;
    include_once $linkHeader;
    include_once $linkNavBar;
    include_once $linkfooter;

	$dbh = connexion();
	$sql =  "SELECT * FROM horaire";
    $horaires = $dbh -> query($sql)->fetchAll (PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "horaire");
?>
	
<div class="container affichage">
    <h1 class="text-dark text-center">Nos horaires</h1>

	<div class="border">  
		<?php foreach($horaires as $horaire): ?>
		<div class="row mt-5">
			<div class="col-3 font-weight-bolder h5"><?= $horaire->jour ?> : </div>
				<?php if($horaire->ouverture == 0) :?>
					<div class="col bgGrey text-center font-weight-bolder h5">FERMEE </div>
					
				<?php else: ?>
					<div class="col-4 h5 text-center"><?= $horaire->heureAM ?> (matin) </div>
					<div class="col-4 h5 text-center"><?= $horaire->heurePM ?> (soir) </div>
				<?php endif;?>
		</div>
		<?php endforeach ?>
	</div>
    
</div>
