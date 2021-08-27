<?php
require_once ("MyData/data.php");
    $titre= $titreContact;
        include_once $linkHeader;
        include_once $linkNavBar;
        include_once $linkfooter;
        
?>

<div class="container affichage">
    <div class="row">
        <div class="col contact contactTitre"><?= strtoupper($titrePourNousContacter) ?></div>
    </div>
    <div class="row">&nbsp;</div>
    <div class="row">
        <div class="col sousContactTitre contact">
            <?= $sousTitrePourNousContacter?>
        </div>
    </div>
    <div class="row">
        <div class="col ">
            <?= $descriptionPourNousContacter?>
        </div>
    </div>

   <!--Section: Contact v.2-->
<section class="mb-4 mt-5">
    <div class="row">
<form method="post" action="contact.php?action=envoyer">
      
        <div class="col-md-6">
            <div class="md-form mb-0">
                <input type="radio" class="mr-1 ml-2" name="genre" value="Madame">Madame</input>
                <input type="radio" class="mr-1 ml-2" name="genre" value="Monsieur">Monsieur</input>
            </div>
        </div>



        <div class="col-md-6">
            <div class="md-form mb-0">
                <input type="text" id="txtEmail" name="email" class="form-control">
                <label for="email" class="">Votre email *</label>
            </div>
        </div>
    </div>

                <!--Grid row-->
    <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="txtNom" name="name" class="form-control">
                            <label for="name" class="">Votre nom *</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="txtPhone" name="phone" class="form-control">
                            <label for="phone" class="">Votre téléphone (optionnel)</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="txtSujet" name="sujet" class="form-control">
                            <label for="sujet" class="">Sujet *</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Votre message *</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

           

            <div class="text-center text-md-left">
                <input type="submit" class="btn btn-primary" />
            </div>
         </form>
            <div class="status"></div>
        </div>
        <!--Grid column-->

      

    </div>

</section>
<!--Section: Contact v.2-->
</div>

<?php
    if(isset($_GET["action"]) && $_GET["action"] == "envoyer"){


    $civilite = $_POST["genre"];
    //echo type_of($_POST["genre"]);
    $nom = $_POST["name"];
    $email = $_POST["email"];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];
    $phone = $_POST["phone"];


    try {

        $bdh = connexion();
        $insertContact = $bdh -> query("INSERT INTO `contact` (`civilite`, `nom`, `telephone`, `email`, `sujet`, `message`) VALUES (:civilite,:nom,:telephone, :email,:sujet,:message)");

        $insertContact -> bindParam(':civilite',$civilite,PDO::PARAM_STR);
        $insertContact -> bindParam(':nom',$nom,PDO::PARAM_STR);
        $insertContact -> bindParam(':telephone',$phone,PDO::PARAM_STR);
        $insertContact -> bindParam(':email',$email,PDO::PARAM_STR);
        $insertContact -> bindParam(':sujet',$sujet,PDO::PARAM_STR);
        $insertContact -> bindParam(':message',$message,PDO::PARAM_STR);

        $insertContact -> execute();

        $rst = "Donnée enregistrée";


    } 
    catch (Exception $e) {
        $rst = "Erreur d'enregistrement";
    }

    }

?>