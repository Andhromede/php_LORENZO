
    <?php 
        $titre = "Carte";
        include_once("header.php");
        include_once("navbar.php");

        // CONNEXION A LA BDD
        function connexion(){
            try {
                $dbh = new PDO('mysql:host=localhost;dbname=pizza;port=3307', 'root', '', array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                ));
    
            } catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            } return($dbh);
        }
    ?>


    <div class="container-fluid affichage">

        <!--------------------------- BANDEAU GRIS --------------------------->
        <div class="row bg-success text-light justify-content-center py-2">
            <div name="divBtn" class="font-weight-bolder btn text-center h5 lien mx-4 tous divBtn" value="tous" id="tous">Tous</div>
            <?php 
                $dbh = connexion();
                $cat = " SELECT * FROM `categorie` ";
            
                foreach($dbh->query($cat) as $data): ?>
                    <div name="divBtn" class="font-weight-bolder btn text-center h5 lien mx-4 <?= $data['NomCategorie']?> divBtn" value="<?= $data['NomCategorie']?>" id="_<?= $data['id'] ?>"><?= $data['NomCategorie']?></div>
                <?php endforeach;                       //Ferme la connexion à la BDD
                    $dbh = NULL;
                ?> 
        </div>


        <div class="row">
            <!--------------------------- SECTION DE GAUCHE --------------------------->    
            <div class="col-8 bg-gris">

                 <!-- PIZZAS -->
                <div class="divPizza">
                    <h3 class="text-center mb-4 pt-5">
                        LES PIZZAS
                    </h3>
                    
                    <div class="row mb-5 justify-content-center">
                        <?php 
                            $dbh = connexion();
                            $produit = "SELECT `nomProduit`, `prixMedium`, `prixLarge`, `descriptif`, `cheminImage`, `categorie_id` FROM `produit` WHERE `categorie_id` = 1 ";
                            
                            foreach($dbh->query($produit) as $data) {
                                $nomProduit = $data['nomProduit'];
                                $prixMedium = $data['prixMedium'];
                                $prixLarge = $data['prixLarge'];
                                $descriptif = $data['descriptif'];
                                $chemin = $data['cheminImage'];
                                
                        ?> 

                            <div class="card col-3 mx-4 mb-5 borderRond">
                                <img class="card-img-top imgSize mx-auto py-3 " src="<?= $chemin ?>" alt="Card image cap">
                                
                                <div class="card-body text-center">
                                    <h5 class="card-title font-weight-bolder size50Px"><?= $nomProduit ?></h5>
                                    <hr class="w-75">
                                    <p class="card-text size180Px"><?= $descriptif ?></p>
                                    <hr class="w-75">
                                    <div class="row">
                                        <?php if($prixLarge == 0){
                                            echo('<div class="col-6 card-title font-weight-bolder pxNeg text-center">Medium <br> '.$prixMedium.'€</div>' );
                                            }else if($prixMedium == 0){
                                                echo('<div class="col-12 card-title font-weight-bolder pxNeg text-center">Large <br> '.$prixLarge.'€</div>' );
                                            }else{
                                                echo('<div class=" col-6 card-title font-weight-bolder pxNeg text-center">Medium <br> '.$prixMedium.'€</div>
                                                    <div class="col-6 card-title font-weight-bolder pxNeg text-center">Large <br> '.$prixLarge.'€</div>' );
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div> 
                        <?php 
                        } $dbh = NULL; //Fermeture du foreach 
                        ?>

                    </div>

                    <hr class="w-75">
                </div>
            


                    <div class="divEntree">
                    <!-- LES ENTREES -->
                        <h3 class="text-center mb-4 pt-5">
                            LES ENTREES
                        </h3>
                        <div class="row mb-5 justify-content-center"> 
                            <?php 
                                $dbh = connexion();
                                $produit = "SELECT `nomProduit`, `prixMedium`, `prixLarge`, `descriptif`, `cheminImage`, `categorie_id` FROM `produit` WHERE `categorie_id` = 4 ";
                                
                                foreach($dbh->query($produit) as $data) {
                                    $nomProduit = $data['nomProduit'];
                                    $prixMedium = $data['prixMedium'];
                                    $prixLarge = $data['prixLarge'];
                                    $descriptif = $data['descriptif'];
                                    $chemin = $data['cheminImage'];
                            ?> 
                            <div class="card col-3 mx-4 mb-5 borderRond">
                                <img class="card-img-top imgSize mx-auto py-3" src="<?= $chemin ?>" alt="Card image cap">
                                
                                <div class="card-body text-center">
                                    <h5 class="card-title font-weight-bolder size50Px"><?= $nomProduit ?></h5>
                                    <hr class="w-75">
                                    <p class="card-text size100Px"><?= $descriptif ?></p>
                                    <hr class="w-75">
                                    <div class="row">
                                        <?php if($prixLarge == 0){
                                            echo('<div class="col-6 card-title font-weight-bolder pxNeg text-center">Medium <br> '.$prixMedium.'€</div>' );
                                            }else if($prixMedium == 0){
                                                echo('<div class="col-12 card-title font-weight-bolder pxNeg text-center">Large <br> '.$prixLarge.'€</div>' );
                                            }else{
                                                echo('<div class=" col-6 card-title font-weight-bolder pxNeg text-center">Medium <br> '.$prixMedium.'€</div>
                                                    <div class="col-6 card-title font-weight-bolder pxNeg text-center">Large <br> '.$prixLarge.'€</div>' );
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            } $dbh = NULL; //Fermeture du foreach 
                            ?>
                            
                        </div>
                        <hr class="w-75">
                    </div>


                    <!-- LES DESSERTS -->
                    <div class="divDesserts">
                        <h3 class="text-center mb-4 pt-5">
                            LES DESSERTS
                        </h3>
                        <div class="row mb-5 justify-content-center"> 
                            <?php 
                                $dbh = connexion();
                                $produit = "SELECT `nomProduit`, `prixMedium`, `prixLarge`, `descriptif`, `cheminImage`, `categorie_id` FROM `produit` WHERE `categorie_id` = 3 ";
                                
                                foreach($dbh->query($produit) as $data) {
                                    $nomProduit = $data['nomProduit'];
                                    $prixMedium = $data['prixMedium'];
                                    $prixLarge = $data['prixLarge'];
                                    $descriptif = $data['descriptif'];
                                    $chemin = $data['cheminImage'];
                            ?> 
                            <div class="card col-3 mx-4 mb-5 borderRond">
                                <img class="card-img-top imgSize mx-auto py-3" src="<?= $chemin ?>" alt="Card image cap">
                                
                                <div class="card-body text-center">
                                    <h5 class="card-title font-weight-bolder size50Px"><?= $nomProduit ?></h5>
                                    <hr class="w-75">
                                    <p class="card-text size100Px"><?= $descriptif ?></p>
                                    <hr class="w-75">
                                    <div class="row">
                                        <?php if($prixLarge == 0){
                                            echo('<div class=" col-12 card-title font-weight-bolder pxNeg text-center">2 parts <br> '.$prixMedium.'€</div>' );
                                            }else if($prixMedium == 0){
                                                echo('<div class=" col-12 card-title font-weight-bolder pxNeg text-center">La part <br>'.$prixLarge.'€</div>' );
                                            }else{
                                                echo('<div class=" col-6 card-title font-weight-bolder pxNeg text-center">La part <br> '.$prixMedium.'€</div>
                                                    <div class="col-6 card-title font-weight-bolder pxNeg text-center">2 parts <br> '.$prixLarge.'€</div>' );
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            } $dbh = NULL; //Fermeture du foreach 
                            ?>
                        </div>
                        <hr class="w-75">
                    </div>

                    <!-- LES BOISSONS -->
                    <div class="divBoissons">
                        <h3 class="text-center mb-4 pt-5">
                            LES BOISSONS
                        </h3>
                        <div class="row mb-5 justify-content-center">
                            <?php 
                                $dbh = connexion();
                                $produit = "SELECT `nomProduit`, `prixMedium`, `prixLarge`, `descriptif`, `cheminImage`, `categorie_id` FROM `produit` WHERE `categorie_id` = 2 ";
                                
                                foreach($dbh->query($produit) as $data) {
                                    $nomProduit = $data['nomProduit'];
                                    $prixMedium = $data['prixMedium'];
                                    $prixLarge = $data['prixLarge'];
                                    $descriptif = $data['descriptif'];
                                    $chemin = $data['cheminImage'];
                            ?> 
                            <div class="card col-3 mx-4 mb-5 borderRond">
                                <img class="card-img-top imgSize mx-auto py-3" src="<?= $chemin ?>" alt="Card image cap">
                                
                                <div class="card-body text-center">
                                    <h5 class="card-title font-weight-bolder size50Px"><?= $nomProduit ?></h5>
                                    <hr class="w-75">
                                    <p class="card-text size100Px"><?= $descriptif ?></p>
                                    <hr class="w-75">
                                    <div class="row">
                                        <?php if($prixLarge == 0){
                                            echo('<div class="col-6 card-title font-weight-bolder pxNeg text-center">33cl / '.$prixMedium.'€</div>' );
                                            }else if($prixMedium == 0){
                                                echo('<div class="col-12 card-title font-weight-bolder pxNeg text-center">1L / '.$prixLarge.'€</div>' );
                                            }else{
                                                echo('<div class=" col-6 card-title font-weight-bolder pxNeg text-center">33cl / '.$prixMedium.'€</div>
                                                    <div class="col-6 card-title font-weight-bolder pxNeg text-center">1L / '.$prixLarge.'€</div>' );
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            } $dbh = NULL; //Fermeture du foreach 
                            ?>
                        </div>
                    </div>
                </div>

            <!--------------------------- SECTION DE DROITE --------------------------->
            <div class="col-4 pt-5">
                <h3 class="ml-5">
                    <u>NOS HORAIRES</u> 
                </h3>

                <!-- horraires -->
                <div class="row mt-4 ml-4">
                    <b class="col-3">
                        <div class="">Lundi :</div>
                        <div class="">Mardi :</div>
                        <div class="">Mercredi :</div>
                        <div class="">Jeudi :</div>
                        <div class="">Vendredi :</div>
                        <div class="">Samedi :</div>
                        <div class="">Dimanche :</div>
                    </b>

                    <div class="col-9 text-left">
                        <div class="">FERME.</div>
                        <div class="">11h-15h / 19h-23h.</div>
                        <div class="">11h-15h / 19h-23h.</div>
                        <div class="">11h-15h / 19h-23h.</div>
                        <div class="">11h-15h / 19h-23h.</div>
                        <div class="">11h-15h30 / 19h-23h30.</div>
                        <div class="">FERME.</div>
                    </div>

                    <h3 class="mt-100px ml-4">
                        <u>OU SOMMES NOUS ?</u> 
                    </h3>

                    <div class="maps mt-4 mx-auto"><iframe width="420" height="420" src="https://maps.google.com/maps?width=420&amp;height=420&amp;hl=en&amp;q=20%20rue%20du%20luxembourg%2C%20roubaix+(Titre)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div class="iframe"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/fr/">https://embedgooglemaps.com/fr/</a> & <a href="https://onlinecasinoutanspelpaus.se/">https://onlinecasinoutanspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
                </div>
            </div>
            
        </div>
    </div>



              
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/carte.js"></script>

    <script>
        $(".Boissons").click(function() {
            $(".divEntree, .divPizza, .divDesserts").addClass('hidden');
            $(".divBoissons").removeClass('hidden');

        });

        $(".Pizza").click(function() {
            $(".divEntree, .divBoissons, .divDesserts").addClass('hidden');
            $(".divPizza").removeClass('hidden');
        });

        $(".Entree").click(function() {
            $(".divPizza, .divBoissons, .divDesserts").addClass('hidden');
            $(".divEntree").removeClass('hidden');
        });

        $(".Desserts").click(function() {
            $(".divPizza, .divBoissons, .divEntree").addClass('hidden');
            $(".divDesserts").removeClass('hidden');
        });

        $(".tous").click(function() {
            $(".divPizza, .divBoissons, .divEntree, .divDesserts").addClass('show');
        });
    </script>  

    <?php include("footer.php"); 

?>