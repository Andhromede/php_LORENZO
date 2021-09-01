<?php 
    require_once("db/db.php");
    include_once("header.php");
    include_once("footer.php");

    $dbh = connexion();

    $sql =  'SELECT p.id, p.nomProduit, p.prixMedium, p.prixLarge, p.descriptif, c.NomCategorie FROM `produit` AS p, `categorie` AS c WHERE c.id = p.categorie_id ORDER BY p.nomProduit' ;
    $produits = $dbh -> query($sql);

    
?>

<div class="container-fluid">

    <div class="text-center my-5">
        <h1>Liste des produits</h1>
    </div>

    <!-- <form action="listeProduits.php" method="post"> -->
        <table class="table mb-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Produit</th>
                    <th scope="col">Prix Medium</th>
                    <th scope="col">Prix Large</th>
                    <th scope="col">Descriptif</th>
                    <th scope="col">Categorie</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($produits as $pdt): ?>
                    <tr class="">
                        <td><?= $pdt->nomProduit ?></td>
                        <td><?= $pdt->prixMedium ?> €</td>
                        <td><?= $pdt->prixLarge ?> €</td>
                        <td><?= $pdt->descriptif ?></td>
                        <td><?= $pdt->NomCategorie ?></td>

                        <td>
                            <a href="details.php?id=<?= $pdt->id ?>" class="btn modifier">
                                <i class="bi bi-pencil-square text-primary"></i>
                                <!-- <img src='https://img.icons8.com/color/48/000000/edit--v3.png'/> -->
                            </a>
                        </td>

                        <td> 
                            <form action="" method="post"> 
                                <input class="btn px-3 supprimer" type="submit" name="supprimer">
                                    <i class="bi bi-trash text-danger"></i>
                                </input>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    <!-- </form> -->


<?php

// SUPPRESSION PRODUIT
    if(isset($_POST["supprimer"]) && $_POST['supprimer'] == "supprimer"){

        $id = $_POST['id'];
        echo($id);

        try {
            $delete = $dbh -> prepare("DELETE FROM produit WHERE id=:produitId");
            $delete -> bindParam('produitId',$pdt->id,PDO::PARAM_INT);
            $result = $delete -> execute();

            echo("<script> 
                    $('.modal').on('shown.bs.modal',function(){
                        $('.btnModal').on('click',function(){
                            window.location = 'listeProduits.php';
                        });
                    });

                    $('.modal').modal('show');
                </script>");

        }catch (PDOException $e) {
            echo('<div class="alert alert-danger mt-4" role="alert">
                        Erreur lors de l\'envoi de votre message.
                    </div>');
        }

    }








?>



    