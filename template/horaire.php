<?php
    require_once("../MyData/data.php");
    $titre = $titreHoraire;
    include_once $linkHeader;
    include_once $linkNavBar;
    include_once $linkfooter;

	$dbh = connexion();
	$sql =  "SELECT * FROM horaire";
    $horaires = $dbh -> query($sql)->fetchAll (PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "horaire");
?>

<link rel="stylesheet" href="../css/horaires.css">
	
<div class="container affichage">
	<div class="section-title">
        <h2 class="text-light">Lorenzo</h2>
        <p class="colorDore">Nos horaires</p>
    </div>

		<div class="cadre">  
			<?php foreach($horaires as $horaire): ?>
			<div class="row my-4">
				<div class="col-3 font-weight-bolder h5 txtJour"><?= $horaire->jour ?> : </div>
					<?php if($horaire->ouverture == 0) :?>
						<div class="col-8 bgDore text-center font-weight-bolder h5">fermé </div>
						
					<?php else: ?>
						<div class="col-4 h4 text-center"><?= str_replace(":", "h", $horaire->heureAM) ?></div>
						<div class="col-4 h4 text-center"><?= str_replace(":", "h", $horaire->heurePM) ?></div>
					<?php endif;?>
			</div>
			<?php endforeach ?>
		</div>
	</div>
    
</div>
