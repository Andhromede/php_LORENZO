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


<div class="container affichage">
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

    <a href="details.php?action=ajouter" class="btn btn-warning mb-4 font-weight-bolder" >
        Ajouter un produit
    </a>

    <table class="table mb-5">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Produit</th>
                <th scope="col">Prix Medium</th>
                <th scope="col">Prix Large</th>
                <th scope="col">Descriptif</th>
                <th scope="col">Categorie</th>
                <th scope="col">Editer</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($produits as $pdt): ?>
                <tr class="">
                    <td><img src="<?= $pdt->cheminImage ?>" class="w-50" alt="image"> </td>
                    <td><?= $pdt->nomProduit ?></td>
                    <td><?= $pdt->prixMedium ?> €</td>
                    <td><?= $pdt->prixLarge ?> €</td>
                    <td><?= $pdt->descriptif ?></td>
                    <td><?= $pdt->NomCategorie ?></td>
                    <td>
                        <a href="details.php?action=modifier&id=<?= $pdt->id ?>" class="btn modifier">
                            <i class="bi bi-pencil-square text-primary"></i>
                        </a>
                    </td>
                    <td> 
                        <form action="" method="post"> 
                            <a href="controleurs/produitsControlleur.php?id=<?= $pdt->id ?>&action=supprimer" class="btn px-3 supprimer" type="submit" name="supprimer" onclick="confirm('etes-vous sure ?')">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>



<script>
    setTimeout(function(){ 
        $('#message').addClass('d-none');
    }, 5000);
</script>
    