<?php
    // include_once("../header.php");
//on vérifie si on a un id

if(!isset($_GET["id"]) || empty($_GET["id"]))
{
// je n'ai pas d'id
header("Location : afficherListeProduits.php");
exit;
}


$id = $_GET["id"];

require_once("../../db/db.php");

//on va chercher l'id dans la base

$sql = "SELECT * FROM `produit` where `id`= :id";

//on prépare la requete

$requete = $bdd->prepare($sql);

//on injecte les paramètres
$requete -> bindValue(":id",$id,PDO::PARAM_INT);

//on execute la requete
$requete -> execute();

//on récupère le produit
$produit = $requete->fetchAll();

var_dump($produit);
//on vérifie si le produit est vide

if(!$produit)
{
    //pas de produit
    http_response_code(404);
    echo "Le produit demandé n'existe pas";
    exit;
}
include_once("../footer.php");
?>

<h1>Modifier le produit <?= $id ?> </h1>

<?php foreach($produit as $p): ?>

 <input type="text" value='<?php $p["nomProduit"]?>'> 
 <input type="text" value='<?php $p["taille"]?>'> 
 <input type="text" value='<?php $p["prix"]?>'> 
 <input type="text" value='<?php $p["descriptif"]?>'> 
 

<?php endforeach; ?>