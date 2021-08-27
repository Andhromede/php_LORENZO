
<?php 

require_once("db/db.php");



$sql =  'SELECT p.id, p.nomProduit, p.taille, p.prix, p.descriptif, c.NomCategorie FROM `produit` AS p, `categorie` AS c WHERE c.id = p.categorie_id' ;

$requete = $bdd -> query($sql);

$produits = $requete->fetchAll();

    include_once("header.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>Liste de mes produits</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">Produit</div>
        <div class="col">Taille</div>
        <div class="col">Prix</div>
        <div class="col">Descriptif</div>
        <div class="col">Categorie</div>
        <div class="col">&nbsp;</div>
    </div>

<?php foreach($produits as $pdt): ?>
    
    
        <div class="row ">
            <div class="col">
                <?= $pdt['nomProduit']; ?>
            </div>
            <div class="col">
                <?= $pdt['taille']; ?>
            </div>
            <div class="col">
                <?= $pdt['prix']; ?>
            </div>
            <div class="col">
                <?= $pdt['descriptif']; ?>
            </div>
            <div class="col">
                <?= $pdt['NomCategorie']; ?>
            </div>
            <div class="col">
                <?php echo $pdt['id'] ?>
                <a href="modifierListeProduits.php?id=<?= $pdt['id'] ?>">Modifier</a>
                <a href='#' id='<?= $pdt['id']; ?>'> Supprimer</a>
            </div>
        </div>

</div>

<?php endforeach;
    

?>

  
    <?php
    include_once('footer.php');
    ?>
