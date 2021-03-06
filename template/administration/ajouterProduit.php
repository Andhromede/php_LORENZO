<?php
    session_start();

    if(!isset($_SESSION['login']) || empty($_SESSION['login']) || $_SESSION['role'] != 1 ){
        header("Location: ../accueil.php");
        return;
    }

    require_once("../../dao/Produits.php");
    require_once("../../dao/Categories.php");
    include_once("navbar.php");
    include_once("../header.php");
    include_once("../footer.php");
    $titre = "Ajouter un produit";

    $p = new Produits();
    
    // $dbh = connexion();
    $sql = "SELECT distinct * FROM `categorie` ";
    $requete = $bdd -> query($sql);
    $nomCategorie = $requete->fetchAll();

    $nomProduit = $_POST["txtNomProduit"];
    $taille = $_POST["txtTaille"];
    $prix = $_POST["txtPrix"];
    $descriptif = $_POST["txtDescriptif"];
    $cheminImage = $_POST["txtCheminImage"];
    $categorieProduitId = $_POST[""];


?>
    <form method="POST">
        <div class="container" style="width: 600px;">
            <div class="row">
                <div class="col bg-dark text-white  text-center"><h1>Ajouter un nouveau produit</h1></div>
            </div>

            <div class="row">
                <div class="col p-2">
                    <label>Nom du produit :</label>
                </div>
                <div class="col p-2" ><input type="text" name="txtNomProduit" style="width: 350px;" require></div>
            </div>

            <div class="row">
                <div class="col p-2">
                    <label>Taille :</label>
                </div>
                <div class="col p-2" ><input type="text" name="txtTaille" style="width: 350px;"></div>
            </div>

            <div class="row">
                <div class="col p-2">
                    <label>Prix :</label>
                </div>
                <div class="col p-2" ><input type="text" name="txtPrix" style="width: 350px;"></div>
            </div>

            <div class="row">
                <div class="col p-2">
                    <label>Descriptif :</label>
                </div>
                <div class="col p-2" ><input type="text" name="txtDescriptif" style="width: 350px;"></div>
            </div>

            <div class="row">
                <div class="col p-2">
                    <label>Image :</label>
                </div>
                <div class="col p-2" ><input type="file" name="txtCheminImage" style="width: 350px;"></div>
            </div>

            <div class="row">
                <div class="col p-2">
                    <label>Categorie du produit :</label>
                </div>

                <div class="col" >
                    <select name="categorieProduit" id="categorieProduit" style="width: 350px;">
                        <option value="">S??lection une categorie</option>
                        
                        <?php foreach($nomCategorie as $nc): ?>
                            <option>
                            <option value="<?php $nc['id'] ?>"><?= $nc['NomCategorie'] ?></option>
                            </option>

                            <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col"><input class="btn bg-dark text-white btn-block" type="submit" value="Ajouter un produit"> </div>
            </div>
        </div>
    </form>

<?php

    if(empty($productName)){
        echo 'ce champ est vide';
    } 

    $sql = "INSERT INTO `categorie` (`nomProduit`, `taille`, `prix`, `descriptif`, `cheminImage`, `categorie_id`) 
    VALUES ($nomProduit, $taille, $prix, $descriptif, null) ";
    $requete = $bdd -> query($sql);

    ?>

    <?php
        include_once($linkfooter);
    ?>