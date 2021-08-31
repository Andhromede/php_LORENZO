<?php 
    require_once("db/db.php");
    include_once("header.php");
    include_once("footer.php");

    $dbh = connexion();
    define ("id", $_GET["id"]);
    $sql =  'SELECT distinct p.id, p.nomProduit, p.prixMedium, p.prixLarge, p.descriptif, p.cheminImage, c.NomCategorie FROM produit AS p, categorie AS c WHERE c.id = p.categorie_id AND p.id='.id;
    $produits = $dbh -> query($sql);
    
    $sqlCat =  'SELECT * FROM categorie';
    $categories = $dbh -> query($sqlCat);






    
?>

<div class="container-fluid">

    <div class="text-center my-5">
        <h1></h1>
    </div>

    <form action="details.php?action=modifier&id=<?= id ?>" method="post">
        <table class="table mb-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Produit</th>
                    <th scope="col">Prix Medium</th>
                    <th scope="col">Prix Large</th>
                    <th scope="col">Descriptif</th>
                    <th scope="col">Categorie</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($produits as $pdt): ?>
                    <tr class="">
                        <td class="col-2"><input class="form-control" type="text" name="nomProduit" value="<?= $pdt->nomProduit ?>"/></td> 
                        <td class="col-1"><input class="form-control col-8" type="text" name="prixMedium" value="<?= $pdt->prixMedium ?>"/></td>
                        <td class="col-1"><input class="form-control col-8" type="text" name="prixLarge" value="<?= $pdt->prixLarge ?>"/></td>
                        <td class="col-4"><textarea class="form-control" type="text" name="descriptif" rows="5"><?= $pdt->descriptif ?></textarea></td>
                        
                        <td class="col-1">
                            <select class="form-control" type="text" value="<?= $pdt->NomCategorie ?>" name="categorie_id"> 
                                <?php foreach($categories as $cat): ?>
                                    <?php if($pdt -> NomCategorie == $cat -> NomCategorie): ?>
                                        <option selected name="<?= $cat->NomCategorie ?>" value="<?= $cat->id ?>"><?= $cat->NomCategorie ?></option>
                                    <?php else: ?>
                                        <option name="<?= $cat->NomCategorie ?>" value="<?= $cat->id ?>"><?= $cat->NomCategorie ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </td> 

                        <td class="col-3 text-center">
                            <img src="<?= $pdt->cheminImage ?>" class="w-50" alt="image">
                            <br>
                            <input type="file" class="mt-3" name="cheminImage">
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

        <div class="row">
            <input class="col-2 mx-auto btn btn-success modifier" type="submit" name="modifier">Modifier</input>
            <a href="listeProduits.php" class="col-2 mx-auto btn btn-danger modifier">Retour à la liste</a>
        </div>

    </form>
    
<?php
    
// MODIFICATION PRODUIT
    if( isset($_POST["modifier"]) && !empty($_POST["modifier"]) ){

        $nom = $_POST["nomProduit"];
        $prixMedium = $_POST["prixMedium"];
        $prixLarge = $_POST["prixLarge"];
        $descriptif = $_POST["descriptif"];
        $categorie_id = $_POST["categorie_id"];


        if(empty($_POST["cheminImage"]) || $_POST["cheminImage"] == null ){
            $chemin = $pdt->cheminImage;
        }else{
            switch ((string)$categorie_id) {
                case '1':
                    $chemin = "img/pizzas/".$_POST["cheminImage"];
                    break;

                case '4':
                    $chemin = "img/entrees/".$_POST["cheminImage"];
                    break;

                case '2':
                    $chemin = "img/boissons/".$_POST["cheminImage"];
                    break;

                case '3':
                    $chemin = "img/desserts/".$_POST["cheminImage"];
                    break; 
            }
        }

        try {
            $update = $dbh -> prepare(" UPDATE produit SET nomProduit = :nomProduit, prixMedium = :prixMedium, prixLarge = :prixLarge, descriptif = :descriptif, cheminImage = :cheminImage, categorie_id = :categorie_id WHERE id =".id);
            
            $update -> bindParam('nomProduit',$nom,PDO::PARAM_STR);
            $update -> bindParam('prixMedium',$prixMedium);
            $update -> bindParam('prixLarge',$prixLarge);
            $update -> bindParam('descriptif',$descriptif,PDO::PARAM_STR);
            $update -> bindParam('cheminImage',$chemin,PDO::PARAM_STR);
            $update -> bindParam('categorie_id',$categorie_id,PDO::PARAM_INT);
            $result = $update -> execute();

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