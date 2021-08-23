<?php
require_once ("MyData/data.php");
    $titre= $titreContact;
        include_once $linkHeader;
        include_once $linkNavBar;
        include_once $linkfooter;
        
?>

<div class="container affichage">
    <div class="row">
        <div class="col contact contactTitre"><?= strtoupper($titrePourNousContacter) ?></div>
    </div>
    <div class="row">&nbsp;</div>
    <div class="row">
        <div class="col sousContactTitre contact">
            <?= $sousTitrePourNousContacter?>
        </div>
    </div>
    <div class="row">
        <div class="col ">
            <?= $descriptionPourNousContacter?>
        </div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="row">
                <div class="col">
                    Formualaire</div>
            </div>
            <div class="row">
                <div class="col"><input type="text" name="" placeholder="votre nom"> </div>
            </div>
            <div class="row">
                <div class="col"><input type="text" name="" placeholder="votre prénom"></div>
            </div>
            <div class="row">
                <div class="col"><input type="text" name="" placeholder="votre "></div>
            </div>
            
        </div>
    </div>

</div>
