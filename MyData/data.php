<?php
/**
 * DONNEES GENERALES
 */
$linkAccueil = "accueil.php";
$linkCarte = "carte.php";
$linkfooter = "footer.php";
$linkHeader = "header.php";
$linkHoraire = "horaire.php";
$linkNavBar = "navbar.php";
$linkLogin = "login.php";
$linkContact = "contact.php";

/**
 * PAGE ACCUEIL
 */
$titreAccueil = "Accueil";

/**
 * PAGE HORAIRE
 */
$titreHoraire = "Horaires";

/**
 * PAGE CARTE
 */
$titreMenu = "Carte";

/**
 * PAGE CONTACT
 */
$titreContact = "Contact";
// $titrePourNousContacter = "pour nous contacter";
// $sousTitrePourNousContacter = "Contactez-nous en complétant le formualire :";
// $descriptionPourNousContacter = "N’hésitez pas à nous contacter pour toute question, nous apporter une idée, nous laisser un commentaire, une information utile nous permettant d’améliorer notre qualité de service, vos avis nous intéresses.
// Nous répondront dans les plus brefs délais.";

$admin = "Administrateur";
$moderateur = "Moderateur";
$user = "Utilisateur";




function modalMessage($link){
    echo("<script> 
            $('.modal').on('shown.bs.modal',function(){
                $('.btnModal').on('click',function(){
                    window.location =".$link.";
                });
            });

            $('.modal').modal('show');
        </script>");
}
?>

