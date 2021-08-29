
    <?php 
        $titre = "Carte";
        include_once("header.php");
        include_once("navbar.php");
        require_once("db/db.php");
        
    ?>

    <link rel="stylesheet" href="css/carte.css">
    <link rel="stylesheet" href="css/accueil.css">

    <div class="container-fluid affichage">
        <div class="row">

            <!--------------------------- SECTION DE GAUCHE --------------------------->    
            <div class="col-8 bg-gris">
                <section id="menu" class="menu section-bg">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h2>Carte</h2>
                            <p class="colorDore">Menu</p>
                        </div>

                        <div class="row" data-aos="fade-up" data-aos-delay="100">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <ul id="menu-flters">
                                    <li data-filter="*" class="filter-active tous font-weight-bolder" value="tous" id="tous">Tous</li>
                                    
                                    <?php
                                        $dbh = connexion();
                                        $cat = $dbh ->query(" SELECT * FROM `categorie` ");
                                        foreach($cat as $data): 
                                    ?>

                                    <li data-filter="*" class="filter-active  text-light font-weight-bolder <?= $data['NomCategorie']?>" value="<?= $data['NomCategorie']?>" id="_<?= $data['id'] ?>"><?= $data['NomCategorie']?></li>
                                    
                                    <?php endforeach;                       
                                        $dbh = NULL; //Ferme la connexion à la BDD
                                    ?> 
                                </ul>
                            </div>
                        </div>


                        <!-- PIZZAS -->
                        <div class="row menu-container divPizza" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="col-12 text-center mt-5 colorDore font-weight-bolder">Les pizzas</h3>

                            <?php 
                                $dbh = connexion();
                                $produit = $dbh -> query("SELECT `nomProduit`, `prixMedium`, `prixLarge`, `descriptif`, `cheminImage`, `categorie_id` FROM `produit` WHERE `categorie_id` = 1 ");
                                    
                                foreach($produit as $data) {
                                    $nomProduit = $data['nomProduit'];
                                    $prixMedium = $data['prixMedium'];
                                    $prixLarge = $data['prixLarge'];
                                    $descriptif = $data['descriptif'];
                                    $chemin = $data['cheminImage'];    
                            ?> 

                            <div class="col-lg-6 menu-item filter-starters">
                                <img src="<?= $chemin ?>" class="menu-img" alt="">
                                
                                <div class="menu-content">
                                    <a href="#"><?= $nomProduit ?></a><div><span><?= $prixMedium ?>€ / <?= $prixLarge ?>€</span>(Maxi)</div>
                                </div>

                                <div class="menu-ingredients">
                                    <?= $descriptif ?>
                                </div>
                            </div>

                            <?php 
                                } $dbh = NULL; //Fermeture du foreach 
                            ?>

                        </div>

                        
                        <!-- ENTREES -->
                        <div class="row menu-container divEntree" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="col-12 text-center mt-5 colorDore font-weight-bolder">Les entrées</h3>

                            <?php 
                                $dbh = connexion();
                                $produit = $dbh -> query("SELECT `nomProduit`, `prixMedium`, `prixLarge`, `descriptif`, `cheminImage`, `categorie_id` FROM `produit` WHERE `categorie_id` = 4 ");
                                    
                                foreach($produit as $data) {
                                    $nomProduit = $data['nomProduit'];
                                    $prixMedium = $data['prixMedium'];
                                    $prixLarge = $data['prixLarge'];
                                    $descriptif = $data['descriptif'];
                                    $chemin = $data['cheminImage'];    
                            ?> 

                            <div class="col-lg-6 menu-item filter-starters">
                                <img src="<?= $chemin ?>" class="menu-img" alt="">
                                
                                <div class="menu-content">
                                    <a href="#"><?= $nomProduit ?></a><div><span><?= $prixMedium ?>€ / <?= $prixLarge ?>€</span>(Maxi)</div>
                                </div>

                                <div class="menu-ingredients">
                                    <?= $descriptif ?>
                                </div>
                            </div>

                            <?php 
                                } $dbh = NULL; //Fermeture du foreach 
                            ?>

                        </div>


                        <!-- DESSERTS -->
                        <div class="row menu-container divDesserts" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="col-12 text-center mt-5 colorDore font-weight-bolder">Les desserts</h3>

                            <?php 
                                $dbh = connexion();
                                $produit = $dbh -> query("SELECT `nomProduit`, `prixMedium`, `prixLarge`, `descriptif`, `cheminImage`, `categorie_id` FROM `produit` WHERE `categorie_id` = 3 ");
                                    
                                foreach($produit as $data) {
                                    $nomProduit = $data['nomProduit'];
                                    $prixMedium = $data['prixMedium'];
                                    $prixLarge = $data['prixLarge'];
                                    $descriptif = $data['descriptif'];
                                    $chemin = $data['cheminImage'];    
                            ?> 

                            <div class="col-lg-6 menu-item filter-starters">
                                <img src="<?= $chemin ?>" class="menu-img" alt="">
                                
                                <div class="menu-content">
                                    <a href="#"><?= $nomProduit ?></a><div><span><?= $prixMedium ?>€ / <?= $prixLarge ?>€</span>(Maxi)</div>
                                </div>

                                <div class="menu-ingredients">
                                    <?= $descriptif ?>
                                </div>
                            </div>

                            <?php 
                                } $dbh = NULL; //Fermeture du foreach 
                            ?>

                        </div>


                        <!-- BOISSONS -->
                        <div class="row menu-container divBoissons" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="col-12 text-center mt-5 colorDore font-weight-bolder">Les Boissons</h3>

                            <?php 
                                $dbh = connexion();
                                $produit = $dbh -> query("SELECT `nomProduit`, `prixMedium`, `prixLarge`, `descriptif`, `cheminImage`, `categorie_id` FROM `produit` WHERE `categorie_id` = 2 ");
                                    
                                foreach($produit as $data) {
                                    $nomProduit = $data['nomProduit'];
                                    $prixMedium = $data['prixMedium'];
                                    $prixLarge = $data['prixLarge'];
                                    $descriptif = $data['descriptif'];
                                    $chemin = $data['cheminImage'];    
                            ?> 

                            <div class="col-lg-6 menu-item filter-starters">
                                <img src="<?= $chemin ?>" class="menu-img" alt="">
                                
                                <div class="menu-content">
                                    <a href="#"><?= $nomProduit ?></a><div><span><?= $prixMedium ?>€ / <?= $prixLarge ?>€</span>(Maxi)</div>
                                </div>

                                <div class="menu-ingredients">
                                    <?= $descriptif ?>
                                </div>
                            </div>

                            <?php 
                                } $dbh = NULL; //Fermeture du foreach 
                            ?>
                        </div>

                    </div>
                </section>
            </div>



            <!--------------------------- SECTION DE DROITE --------------------------->
            <div class="col-4 pt-5 bg-droite">
                <div class="section-title ml-5 mt-2">
                    <h2>ouverture</h2>
                    <p class="text-dark">Horaires</p>
                </div>

                <!-- horraires -->
                <div class="row mt-4 ml-4 mb-5">
                    <?php 
                        $dbh = connexion();
                        $horaire = $dbh -> query(" SELECT * FROM `horaire` ");
                        foreach($horaire as $data){
                    ?> 

                    <div class="col-4 font-weight-bolder"><?= $data['jour'] ?> : </div>
                    <div class="col-8 text-left text-dark font-weight-bolder"><?php echo(str_replace(":", "h", $data['heureAM']))?> / <?php echo(str_replace(":", "h", $data['heurePM']))?></div>

                        <?php 
                        } // Fin foreach
                        ?>

                    <hr class="my-5">

                    <div class="section-title ml-4 mt-5">
                        <h2>Maps</h2>
                        <p class="text-dark">Ou sommes nous ?</p>
                    </div>

                    <!-- <h3 class="mt-100px ml-4">
                        <u class="text-dark font-weight-bolder">OU SOMMES NOUS ?</u> 
                    </h3> -->

                    <div class="maps mt-4"><iframe width="420" height="420" src="https://maps.google.com/maps?width=420&amp;height=420&amp;hl=en&amp;q=20%20rue%20du%20luxembourg%2C%20roubaix+(Titre)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div class="iframe"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/fr/">https://embedgooglemaps.com/fr/</a> & <a href="https://onlinecasinoutanspelpaus.se/">https://onlinecasinoutanspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
                </div>
                
            </div>
            
        </div>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/carte.js"></script>

    <?php include("footer.php"); 

?>