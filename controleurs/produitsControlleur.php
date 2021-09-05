<?php 
    session_start();
    require_once("../db/db.php");

    define ("id", $_GET["id"]);
    $dbh = connexion();


// SUPPRESSION PRODUIT
    if(isset($_GET["action"]) && $_GET['action'] == "supprimer"){

        try {
            $delete = $dbh -> prepare("DELETE FROM produit WHERE id=:produitId");
            // $delete -> bindParam('produitId',$pdt->id,PDO::PARAM_INT);
            $result = $delete -> execute([':produitId' => id]);

            $message = "Votre produit à bien été supprimé !";
            $_SESSION['message'] = $message;
            header('location:../listeProduits.php');

        }catch (PDOException $e) {
            echo('<div class="alert alert-danger mt-4" role="alert">
                        Erreur lors de la suppression du produit
                    </div>');
        }

    }
   








    ?>