<?php 
    // require_once("../../db/db.php");
    // include_once("../header.php");
    // include_once("../footer.php");
    // include_once("../../dao/Produits.php");
    // include_once("../../dao/Categories.php");

    $dbh = connexion();
    $id = $_GET["id"] ?? 0;

    // RECHERCHER PRODUIT
    $sql =  "SELECT p.*, c.NomCategorie FROM produit AS p , categorie AS c WHERE  c.id = p.categorie_id AND p.id=".$id;
    $produits = $dbh -> query($sql)->fetchAll (PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Produits");
    

    // RECHERCHER CATEGORIE
    $sqlCat =  'SELECT * FROM categorie'; 
    $categories = $dbh -> query($sqlCat)->fetchAll (PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Categories");
?>

<!-- <link rel="stylesheet" href="../../css/general.css"> -->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">


<div class="container-fluid">
    <div class="text-center my-5">

    <!-- CONDITION DE FORM DYNAMIQUE (MODIF OU AJOUT) -->
        <?php if(isset($_GET['action']) && $_GET['action'] == "ajouter"): ?>
                <h1>Ajouter un nouveau produit</h1>
            </div>
            <form action="details.php?action=ajouter" method="post" enctype="multipart/form-data"> 
        <?php else: ?>
            <h1>Modifier un nouveau produit</h1>
            </div>
            <form action="details.php?action=modifier&id=<?= $id ?>" method="post" enctype="multipart/form-data"> 
        <?php endif; ?>
    <!-- FIN DE CONDITION DU FORM DYNAMIQUE-->

            <table class="table mb-5">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Produit</th>
                        <th class="text-center">Prix Medium / €</th>
                        <th class="text-center">Prix Large / €</th>
                        <th class="text-center">Descriptif</th>
                        <th class="text-center">Categorie</th>
                        <th class="text-center">Actif</th>
                        <th class="text-center">Image</th>
                    </tr>
                </thead>


        <!-- AJOUT DE PRODUIT -->
            <?php if(isset($_GET['action']) && $_GET['action'] == "ajouter"): ?>
                <tbody>
                    <tr class="">
                        <td class="col-2"><input class="form-control" type="text" name="nomProduit" value=""/></td> 
                        <td class="col-1"><input class="form-control col-8" type="text" name="prixMedium" value=""/></td>
                        <td class="col-1"><input class="form-control col-8" type="text" name="prixLarge" value=""/></td>
                        <td class="col-3"><textarea class="form-control" type="text" name="descriptif" rows="5"></textarea></td>
                        
                        <td class="col-1">
                            <select class="form-control" type="text" value="" name="categorie_id"> 
                                <?php foreach($categories as $cat): ?>
                                        <option name="<?= $cat->NomCategorie ?>" value="<?= $cat->id ?>"><?= $cat->NomCategorie ?></option>
                                <?php endforeach ?>
                            </select>
                        </td> 

                        <td class="text-center col-2">
                            <?php if($pdt->actif != 0): ?>
                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-onstyle="danger">
                            <?php else : ?>
                                <input type="checkbox" data-toggle="toggle" data-offstyle="danger" data-onstyle="success">
                            <?php endif; ?>
                        </td>

                        <td class="col-2 text-center">
                            <img src="" class="w-50" alt="">
                            <br>
                            <input type="file" class="mt-3" name="cheminImage">
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="row">
                <input class="col-2 mx-auto btn btn-success ajouter" type="submit" name="ajouter" value="Enregistrer">
                <a href="listeProduits.php" class="col-2 mx-auto btn btn-danger ">Retour à la liste</a>
            </div>
        <!-- FIN AJOUT DE PRODUIT -->   


        <!-- MODIFICATION DE PRODUIT -->
            <?php elseif(isset($_GET['action']) && $_GET['action'] == "modifier"): ?>
                <tbody>
                    <?php foreach($produits as $pdt): ?>
                        <tr class="">
                            <td class="col-2"><input class="form-control" type="text" name="nomProduit" value="<?= $pdt->nomProduit ?>"/></td> 
                            <td class="col-1"><input class="form-control col-8" type="text" name="prixMedium" value="<?= $pdt->prixMedium ?>"/></td>
                            <td class="col-1"><input class="form-control col-8" type="text" name="prixLarge" value="<?= $pdt->prixLarge ?>"/></td>
                            <td class="col-3"><textarea class="form-control" type="text" name="descriptif" rows="5"><?= $pdt->descriptif ?></textarea></td>
                            
                            <td class="col-2">
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

                            <td class="text-center col-2">
                                <input type="checkbox"  <?php if($pdt->actif != 0): ?>checked<?php endif; ?> data-toggle="toggle" data-onstyle="success" data-onstyle="danger" id="cbActif" value="" name="checkBox">
                            </td>

                            <td class="col-2 text-center">
                                <img src="../<?= $pdt->cheminImage ?>" class="w-50" alt="image">
                                <br>
                                <input type="file" class="mt-3" name="cheminImage">
                            </td>
                        </tr>
                    <?php endforeach;  ?>  
                </tbody>
            </table>

            <div class="row">
                <input class="col-2 mx-auto btn btn-success modifier" type="submit" name="modifier" value="Enregistrer">
                <a href="listeProduits.php" class="col-2 mx-auto btn btn-danger modifier">Retour à la liste</a>
            </div>

            <?php endif; ?>
        <!-- FIN MODIFICATION DE PRODUIT --> 
        </form>



    <!-- MODAL DE MODIFICATION -->
        <div class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Votre produit à bien été modifié</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p>Retour à la liste des produits</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btnValider">Valider</button>
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </div>
        </div>    
    <!-- FIN DE MODAL -->
<?php
    
    
//MODIFICATION PRODUIT
    if( isset($_GET['action']) && $_GET['action'] == "modifier" && !empty($_POST) ){
       
        foreach($produits as $produit){
            $cheminImage = $produit->cheminImage;
            $nom = $_POST["nomProduit"];
            $prixMedium = $_POST["prixMedium"];
            $prixLarge = $_POST["prixLarge"];
            $descriptif = $_POST["descriptif"];
            $categorie_id = $_POST['categorie_id'];
            $actif = "";

            if(isset($_POST['checkBox'])){
                $actif = 1;
            }else{
                $actif = 0;
            }

        }
        
            $cheminImage = image($_FILES["cheminImage"], $cheminImage, $categorie_id );
      
        try {
            $update = $dbh -> prepare("UPDATE produit SET nomProduit = :nomProduit, prixMedium = :prixMedium, prixLarge = :prixLarge, descriptif = :descriptif, cheminImage = :cheminImage, actif = :actif, categorie_id = :categorie_id WHERE id =".$id);
            $update -> bindParam('nomProduit',$nom);
            $update -> bindParam('prixMedium',$prixMedium);
            $update -> bindParam('prixLarge',$prixLarge);
            $update -> bindParam('descriptif',$descriptif);
            $update -> bindParam('cheminImage',$cheminImage);
            $update -> bindParam('actif',$actif);
            $update -> bindParam('categorie_id',$categorie_id);
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
                        Erreur lors de l\'envoi de votre message.<br>'.$e->getMessage().'
                    </div>');
        }
    }
// FIN MODIFICATION PRODUIT


//AJOUT DE PRODUIT
    if(isset($_GET["action"]) && $_GET["action"] == "ajouter" && !empty($_POST)){
    

        $nomProduit = $_POST['nomProduit'];
        $prixMedium = $_POST['prixMedium'];
        $prixLarge = $_POST['prixLarge'];
        $descriptif = $_POST['descriptif'];
        $categorie_id = $_POST['categorie_id'];
        $cheminImage = image($_FILES["cheminImage"], $produits, $categorie_id );
        $actif = 1;

        $insert = $dbh -> prepare("INSERT INTO produit(nomProduit, prixMedium, prixLarge, descriptif, cheminImage, actif, categorie_id) VALUES (:nomProduit,:prixMedium,:prixLarge,:descriptif,:cheminImage,:actif,:categorie_id)");
        $insert -> bindParam('nomProduit',$nomProduit);
        $insert -> bindParam('prixMedium',$prixMedium);
        $insert -> bindParam('prixLarge',$prixLarge);
        $insert -> bindParam('descriptif',$descriptif);
        $insert -> bindParam('cheminImage',$cheminImage);
        $insert -> bindParam('actif',$actif);
        $insert -> bindParam('categorie_id',$categorie_id);
        $result = $insert -> execute();

        
        echo("<script> 
                $('.modal').on('shown.bs.modal',function(){
                    $('.btnModal').on('click',function(){
                        window.location = 'listeProduits.php';
                    });
                });

                $('.modal').modal('show');
            </script>");
    }
//FIN AJOUT DE PRODUIT


//FONCTION DE MODIFICATION DE L'IMAGE
    function image($newFiles, $oldChemin, $categorie_id){
        if( !isset($newFiles["name"]) || !is_uploaded_file($newFiles['tmp_name']) ){
            $cheminImage = $oldChemin;

        }else{
            switch ((string)$categorie_id) {
                case '1':
                    $cheminImage = "../img/pizzas/".$newFiles["name"];
                    break;

                case '4':
                    $cheminImage = "../img/entrees/".$newFiles["name"];
                    break;

                case '2':
                    $cheminImage = "../img/boissons/".$newFiles["name"];
                    break;

                case '3':
                    $cheminImage = "../img/desserts/".$newFiles["name"];
                    break; 
            }

            $origine = $newFiles['tmp_name'];
            $destination = "../".$cheminImage;
            move_uploaded_file($origine, $destination);
        }
        return $cheminImage;
    }
//FIN MODIFICATION IMAGE

?>

<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>


<script>

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })

    $('.btnValider').click(function(){
        window.location = "listeProduits.php";
    });

   
//    $('input[type="checkbox"]').change(function () {
//         var check = $(this).prop('checked');
//         console.log("Change: " + check);
//     });

</script>