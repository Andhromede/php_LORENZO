<?php
    $titre= $titreContact;
    require_once ("MyData/data.php");
    include_once $linkHeader;
    include_once $linkNavBar;
    include_once $linkfooter;


    if(isset($_GET["action"]) && $_GET["action"] == "envoyer" && !empty($_POST)){
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $sujet = $_POST["sujet"];
        $message = $_POST["message"];

        try {
            $bdh = connexion();
            $insert = $bdh -> prepare("INSERT INTO contact (nom, email, sujet, message) VALUES (:nom, :email, :sujet, :message)");
            $insert -> bindParam('nom',$nom,PDO::PARAM_STR);
            $insert -> bindParam('email',$email,PDO::PARAM_STR);
            $insert -> bindParam('sujet',$sujet,PDO::PARAM_STR);
            $insert -> bindParam('message',$message,PDO::PARAM_STR);
            $insert -> execute();

            // header('location:contact.php');

            echo('<div class="alert alert-success mt-4" role="alert">
                    Votre message à bien été envoyé.
                </div>');
            
        }catch (Exception $e) {
            echo('<div class="alert alert-danger mt-4" role="alert">
                    Votre message à bien été envoyé.
                </div>');
        }
    }
        
?>

<link rel="stylesheet" href="css/contact.css">

<div class="container affichage">
    
    <!-- TITRE -->
    <div class="contact contactTitre">Contactez-Nous</div>

    <!--FORMULAIRE-->
    <section class="my-5 row">
        <div class="col-7 bg-contact mx-auto mb-5">

            <form method="post" action="contact.php?action=envoyer" class="row">
                <div class="md-form col-5">
                    <label for="name" class="mt-4">Nom</label>
                    <input type="text" id="txtNom" name="nom" class="form-control">
                </div>

                <div class="md-form col-7">
                    <label for="email" class="mt-4">Email</label>
                    <input type="email" id="txtEmail" name="email" class="form-control">
                </div>
    
                <div class="md-form col-12">
                    <label for="sujet" class="mt-4">Sujet</label>
                    <input type="text" id="txtSujet" name="sujet" class="form-control">
                </div>

                <div class="md-form col-12">
                    <label for="message" class="mt-4">Message</label>
                    <textarea type="text" rows="10" id="message" name="message" class="form-control md-textarea"></textarea>
                </div>

                <div class="text-center mt-5 mx-auto">
                    <input type="submit" class="btn btn-primary" />
                </div>
            </form>

        </div>
    </section>
</div>

