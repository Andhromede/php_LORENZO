<?php 
    include_once("header.php");
    require_once("db/db.php");
    include_once("navbar.php");
    include_once("footer.php");
    include_once("dao/Produits.php");

    $dbh = connexion();
    $sql =  "SELECT p.id, p.nomProduit, p.prixMedium, p.prixLarge, p.descriptif, p.cheminImage, c.NomCategorie FROM `produit` AS p, `categorie` AS c WHERE c.id = p.categorie_id ORDER BY p.nomProduit";
    $produits = $dbh -> query($sql)->fetchAll (PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Produits");
?>

<link rel="stylesheet" href="css/listeProduits.css">

<div class="container affichage ">
    <?php 
         if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
            $message = $_SESSION['message'];
            echo '<div class="alert alert-success mt-4" role="alert" id="message">'.$message.'</div>';
            unset($_SESSION['message']);
        }
    ?>

    <div class="text-center my-5">
        <h1>Liste des produits</h1>
    </div>

    <div class="btns">
        <a href="details.php?action=ajouter" class="btn-menu animated fadeInUp scrollto btnAjout mb-4">Ajouter un produit</a>
    </div>

    <!-- <a href="details.php?action=ajouter" class="btn bgDore mb-4 font-weight-bolder" >
        Ajouter un produit
    </a> -->

    <table class="table mb-5 tableau border borderColor">
        <thead class="bgDore">
            <tr class="text-center fontSizeTxt">
                <th class="col-2 ">Image</th>
                <th class="col-1 ">Produit</th>
                <th class="col-1 ">Prix Medium</th>
                <th class="col-1 ">Prix Large</th>
                <th class="col-4 ">Descriptif</th>
                <th class="col-1 ">Categorie</th>
                <th class="col-1 ">Editer</th>
                <th class="col-1 ">Supprimer</th>
            </tr>
        </thead>

        <tbody>
        <!-- AFFICHAGE DE TOUS LES PRODUITS -->
            <?php foreach($produits as $pdt): ?>
                <tr class="text-light fontSizeTxt">
                    <td class="text-center"><img src="<?= $pdt->cheminImage ?>" class="w-50" alt="image"> </td>
                    <td class="text-center"><?= $pdt->nomProduit ?></td>
                    <td class="text-center"><?= $pdt->prixMedium ?> €</td>
                    <td class="text-center"><?= $pdt->prixLarge ?> €</td>
                    <td><?= $pdt->descriptif ?></td>
                    <td class="text-center"><?= $pdt->NomCategorie ?></td>
                    <td class="text-center">
                        <a href="details.php?action=modifier&id=<?= $pdt->id ?>" class="btn modifier">
                            <i class="bi bi-pencil-square icons color"></i>
                        </a>
                    </td>
                    <td class="text-center"> 
                        <form action="" method="post"> 
                            <a href="controleurs/produitsControlleur.php?id=<?= $pdt->id ?>&action=supprimer" class="btn px-3 supprimer" type="submit" name="supprimer" onclick="confirm('etes-vous sure ?')">
                                <i class="bi bi-trash icons colorRed"></i>
                            </a>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        <!-- FIN D'AFFICHAGE DES PRODUITS -->
        </tbody>
    </table>

    <hr>

    <div class="btns">
        <a href="details.php?action=ajouter" class="btn-menu animated fadeInUp scrollto btnAjout mb-4">Ajouter un produit</a>
    </div>
</div>

<script src="js/carte.js"></script>

<script>

    setTimeout(function(){ 
        $('#message').addClass('d-none');
    }, 5000);
</script>
    