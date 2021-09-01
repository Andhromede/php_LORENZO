<?php 
    require_once("db/db.php");
    include_once("header.php");
    include_once("footer.php");

    $dbh = connexion();
    $id = $_GET["id"] ?? 0;
    // define ("id", $_GET["id"]);

    $sql =  "SELECT DISTINCT p.id, p.nomProduit, p.prixMedium, p.prixLarge, p.descriptif, p.cheminImage, c.NomCategorie FROM produit AS p, categorie AS c WHERE c.id = p.categorie_id AND p.id=".$id;
    $produits = $dbh -> query($sql);

    $sqlCat =  'SELECT * FROM categorie';
    $categories = $dbh -> query($sqlCat) ;


    
?>

<div class="container-fluid">

    <div class="text-center my-5">
        <h1></h1>
    </div>

    <form action="details.php?action=modifier&id=<?= $id ?>" method="post">
        <table class="table mb-5">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Produit</th>
                    <th class="text-center">Prix Medium / €</th>
                    <th class="text-center">Prix Large / €</th>
                    <th class="text-center">Descriptif</th>
                    <th class="text-center">Categorie</th>
                    <th class="text-center">&nbsp;</th>
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
                <?php endforeach;  ?> 
                
            </tbody>

        </table>

        <div class="row">
            <input class="col-2 mx-auto btn btn-success modifier" type="submit" name="modifier"></input>
            <a href="listeProduits.php" class="col-2 mx-auto btn btn-danger modifier">Retour à la liste</a>
        </div>

    </form>
    
<?php
    
// MODIFICATION PRODUIT
    if( isset($_POST["modifier"]) && !empty($_POST["modifier"]) ){

        $nom2 = $_POST["nomProduit"];
        $prixMedium2 = $_POST["prixMedium"];
        $prixLarge2 = $_POST["prixLarge"];
        $descriptif2 = $_POST["descriptif"];
        $categorie_id2 = $_POST["categorie_id"];

        foreach($produits as $pdt){
            $cheminImage = $pdt->cheminImage;
            if($cheminImage != $cheminImage)
        }

        if(empty($_FILES["cheminImage"])){
            $cheminImage = $pdt->cheminImage;

        }else{
            switch ((string)$categorie_id) {
                case '1':
                    $cheminImage = "img/pizzas/".$_POST["cheminImage"];
                    break;

                case '4':
                    $cheminImage = "img/entrees/".$_POST["cheminImage"];
                    break;

                case '2':
                    $cheminImage = "img/boissons/".$_POST["cheminImage"];
                    break;

                case '3':
                    $cheminImage = "img/desserts/".$_POST["cheminImage"];
                    break; 
            }
        }
        // var_dump($_POST);

        try {
            $update = $dbh -> prepare("UPDATE produit SET nomProduit = :nomProduit, prixMedium = :prixMedium, prixLarge = :prixLarge, descriptif = :descriptif, cheminImage = :cheminImage, categorie_id = :categorie_id WHERE id =".$id);
            $update -> bindParam('nomProduit',$nom);
            $update -> bindParam('prixMedium',$prixMedium);
            $update -> bindParam('prixLarge',$prixLarge);
            $update -> bindParam('descriptif',$descriptif);
            $update -> bindParam('cheminImage',$cheminImage);
            $update -> bindParam('categorie_id',$categorie_id);
            $result = $update -> execute();

            // echo("<script> 
            //         $('.modal').on('shown.bs.modal',function(){
            //             $('.btnModal').on('click',function(){
            //                 window.location = 'listeProduits.php';
            //             });
            //         });

            //         $('.modal').modal('show');
            //     </script>");

        }catch (PDOException $e) {
            echo('<div class="alert alert-danger mt-4" role="alert">
                        Erreur lors de l\'envoi de votre message.<br>'.$e->getMessage().'
                    </div>');
        }

    }



?>