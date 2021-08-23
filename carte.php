
  <?php 
      $titre = "Carte";
      include_once("header.php");
    //   include_once("navbar.php");


    // CONNEXION A LA BDD
    function connexion(){
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=pizza', 'root', '');
             
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }return($dbh);
    // $dbh = null;

    // $dbh->query("SELECT * from 'produits' ");
    }





   ?>


    <div class="container-fluid mt-affichage">

        <!--------------------------- BANDEAU GRIS --------------------------->
        <div class="row bg-secondary text-light justify-content-center py-2">
            <div href="" class="col-1 text-center h5 lien">ENTREES</div>
            <div href="" class="col-1 text-center h5 lien">PIZZAS</div>
            <div href="" class="col-1 text-center h5 lien">DESSERTS</div>
            <div href="" class="col-1 text-center h5 lien">BOISSONS</div>
        </div>

        
        <div class="row mt-5">

        <!--------------------------- SECTION DE GAUCHE --------------------------->    
            <div class="col-8">
            <!-- PIZZAS -->
                <h3 class="text-center mb-4">
                    LES PIZZAS
                </h3>
                
                <div class="row mb-5 justify-content-center">

                    <?php 
                    try {
                        $dbh = new PDO('mysql:host=localhost;dbname=pizza', 'root', '', array(
                            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                        ));
                        $produit = "SELECT `nomProduit`, `taille`, `prix`, `descriptif`, `cheminImage`, `categorie_id` FROM `produit` WHERE `categorie_id` = 1 ";
                        // echo "connexion ok";
                        
                    } catch (PDOException $e) {
                        print "Erreur !: " . $e->getMessage() . "<br/>";
                        die();
                    }

                    foreach($dbh->query($produit) as $data) {
                        $nomProduit = $data['nomProduit'];
                        $taille = $data['taille'];
                        $prix = $data['prix'];
                        $descriptif = $data['descriptif'];
                        $chemin = $data['cheminImage'];
                    ?> 

                        <div class="card col-3 mx-4 mb-5">
                            <img class="card-img-top imgSize mx-auto py-3" src="<?= $chemin ?>" alt="Card image cap">
                            
                            <div class="card-body text-center">
                                <h5 class="card-title font-weight-bolder"><?= $nomProduit ?></h5>
                                <h5 class="card-title"><?= $descriptif ?></h5>
                                <div class="row">
                                    <div class=" col-5 card-title font-weight-bolder pxNeg text-center"><?= $taille .'<br>'. $prix ?></div>
                                </div>
                            </div>
                        </div> 
                    <?php 
                    } 
                    ?>

                    <!-- <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/Royale.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Royale</h5>
                            <p class="card-text sizeTxt">Sauce tomate à l'origan, jambon, mozzarella et champignons frais.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center">Large <br> 12,90€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium <br> 10,90€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/orientale.jpeg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Orientale</h5>
                            <p class="card-text sizeTxt">Sauce tomate à l'origan, mozzarella, merguez et champignons frais.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center heighTxt">Large <br> 14,50€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium <br> 12,50€</div>
                            </div>
                        </div>
                    </div> 


                    
                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/maroilles.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Ch'ti</h5>
                            <p class="card-text sizeTxt">Crème fraiche, mozzarella, maroilles et lard fumé.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center">Large <br> 14,50€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium <br> 12,50€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/4fromages.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">4 Fromages</h5>
                            <p class="card-text sizeTxt">Crème fraiche, mozzarella, emmental, fromage de chèvre, gorgonzola.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center">Large <br> 15,90€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium <br> 13,90€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/montagnarde.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Montagnarde</h5>
                            <p class="card-text sizeTxt">Crème fraiche, mozzarella, jambon cru, fromage à raclette et champignons frais.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center heighTxt">Large <br> 15,90€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium <br> 13,50€</div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/vege4.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Végé.</h5>
                            <p class="card-text sizeTxt">Sauce tomate à l'origan, mozzarella, champignons, oignons rouges, poivrons verts, tomages fraiches et olives noires .</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center">Large <br> 13,50€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium <br> 11,50€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/mer2.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Oceane</h5>
                            <p class="card-text sizeTxt">Sauce tomate a l'origan, mozarella, moules, crevettes, calamars, poivrons.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center">Large <br> 17,30€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium <br> 15,30€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/jParme.png" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Parmesane</h5>
                            <p class="card-text sizeTxt">Crème fraiche, mozzarella, jambon de parme, champignons, noix, parmesan.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center heighTxt">Large <br> 14,40€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium <br> 12,40€</div>
                            </div>
                        </div>
                    </div> -->
                </div>

                <hr class="w-75">


            <!-- LES ENTREES -->
                <h3 class="text-center mb-4">
                    LES ENTREES
                </h3>

                <!-- ligne 1 -->
                <div class="row mb-5 justify-content-center">   
                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/cesar.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Salade César</h5>
                            <p class="card-text sizeTxt">Salade romaine, filets de poulets rotis, tomates cerises, oeufs dur, copeaux de parmesan, sauce cesar.</p>
                            <div class="text-center card-title font-weight-bolder pxNeg text-center">10,80€</div>
                        </div>
                    </div>

                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/mediteraneene.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Salade méditerranéenne</h5>
                            <p class="card-text sizeTxt">Salade, avocat, tomates, oignons rouges, poulet roti, sauce vinaigre balsamique.</p>
                            <div class="text-center card-title font-weight-bolder pxNeg text-center">10,80€</div>
                        </div>
                    </div>

                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/oignons.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Oignons Rings</h5>
                            <p class="card-text sizeTxt">Un classique américain, des rondelles d'oignons frits.</p>
                            <div class="row">
                            <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 4 <br> 2,80€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 9 <br> 5,50€</div>
                            </div>
                        </div>
                    </div>

                    <!-- ligne 2 -->
                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/nuggets2.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Nuggets</h5>
                            <p class="card-text sizeTxt">Des filets de poulets pannées et frits.</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 4 <br> 3,90€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 9 <br> 7,80€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/painAil3.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Pain à l'ail</h5>
                            <p class="card-text sizeTxt">Du pain froté à l'ail et au persil, fouré à la mozarella puis gratinée.</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">à l'unité <br> 3,50€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 2 <br> 5,50€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/tartine.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Bruschetta Tomate mozza</h5>
                            <p class="card-text sizeTxt">Deux grande tranche de gratinées, recouvertes de tomates fraiches et de mozzarella.</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">à l'unité <br> 3,50€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 2 <br> 5,50€</div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="w-75">


            <!-- LES DESSERTS -->
                <h3 class="text-center mb-5">
                    LES DESSERTS
                </h3>

                <!-- ligne 1 -->
                <div class="row mb-5 justify-content-center">   
                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/tiramisu.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Tiramisu</h5>
                            <p class="card-text sizeTxt">Crème gourmande a la mascarpone, biscuits cuillère, café et cacao.</p>
                            <h5 class="card-title font-weight-bolder">3,50€</h5>
                        </div>
                    </div>

                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/panacota.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Panna Cotta</h5>
                            <p class="card-text sizeTxt">Un classique italien à base de crème et de lait gélifié accompagné d'un coulis de fruits rouge, de caramel ou de chocolat</p>
                            <h5 class="card-title font-weight-bolder">2,80€</h5>
                        </div>
                    </div>

                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/canelloni2.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Cannoli Sicilien</h5>
                            <p class="card-text sizeTxt">Tuile italienne fourrée d'une crème à la ricotta aromatisé au citron.</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 2 <br> 4,90€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 4 <br> 8,00€</div>
                            </div>
                        </div>
                    </div>

                    <!-- ligne 2 -->
                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/brownie.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Brownie</h5>
                            <p class="card-text sizeTxt">Le classique américain au chocolat et aux noisettes.</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">à l'unité <br> 3,50€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 3 <br> 7,00€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/glaces2.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Pot de glace</h5>
                            <p class="card-text sizeTxt">Crème glacée au choix : Vanille, Chocolat, Cookie, Caramel beurre salé, Pecan ou Dulce De Leche.</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">100ml <br> 3,00€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">200ml <br> 5,50€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/cookie.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Cookie</h5>
                            <p class="card-text sizeTxt">Parfum au choix : tout chocolat, pétites de chocolat, cranberrie et chocolat blanc ou vanille aux éclats de noisettes.</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">à l'unité <br> 2,00€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 3 <br> 5,00€</div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="w-75">


             <!-- LES BOISSONS -->
                <h3 class="text-center mb-5">
                    LES BOISSONS
                </h3>

                <!-- ligne 1 -->
                <div class="row mb-5 justify-content-center">   
                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/boissons/sodas.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Sodas</h5>
                            <p class="card-text sizeTxt">Coca-Cola, Fanta, IceTea, Oasis, Jus d'orange, Jus de pomme, Perrier, Vitel.</p>
                            <h5 class="card-title font-weight-bolder">3,50€</h5>
                        </div>
                    </div>

                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/boissons/bieres.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Bières</h5>
                            <p class="card-text sizeTxt">Heineken, Desperado, Pelforth ambré, Tourtelle twist (sans alcool).</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-right heighTxt">33cl</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-left">3,00€</div>
                            </div>
                            <!-- <div class="card-title font-weight-bolder pxNeg text-center">33cl 3,00€</div> -->
                        </div>
                    </div>

                    <div class="card col-3 mx-4 mb-5">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/boissons/vins.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Vins</h5>
                            <p class="card-text sizeTxt">Côtes de Provences<br>ou<br>Beaujolais Villages.</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center heighTxt">Rosé <br> 9,50€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">Rouge <br> 9,80€</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        

        <!--------------------------- SECTION DE DROITE --------------------------->
            <div class="col-4">

                <h3 class="">
                    <u>NOS HORRAIRES</u> 
                </h3>

            <!-- horraires -->
                <div class="row mt-4">
                    <b class="col-3">
                        <div class="">Lundi :</div>
                        <div class="">Mardi :</div>
                        <div class="">Mercredi :</div>
                        <div class="">Jeudi :</div>
                        <div class="">Vendredi :</div>
                        <div class="">Samedi :</div>
                        <div class="">Dimanche :</div>
                    </b>

                    <b class="col-9 text-left">
                        <div class="">FERME.</div>
                        <div class="">11h-15h / 19h-23h.</div>
                        <div class="">11h-15h / 19h-23h.</div>
                        <div class="">11h-15h / 19h-23h.</div>
                        <div class="">11h-15h / 19h-23h.</div>
                        <div class="">11h-15h30 / 19h-23h30.</div>
                        <div class="">FERME.</div>
                    </b>

                    <h3 class="mt-100px ml-3">
                        <u>OU SOMMES NOUS ?</u> 
                    </h3>

                    <div class="maps mt-4"><iframe width="420" height="420" src="https://maps.google.com/maps?width=420&amp;height=420&amp;hl=en&amp;q=20%20rue%20du%20luxembourg%2C%20roubaix+(Titre)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div class="iframe"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/fr/">https://embedgooglemaps.com/fr/</a> & <a href="https://onlinecasinoutanspelpaus.se/">https://onlinecasinoutanspelpaus.se/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
                    <!-- <div class="maps mt-4"><iframe width="420" height="420" src="https://maps.google.com/maps?width=420&amp;height=420&amp;hl=en&amp;q=20%20rue%20du%20luxembourg%2C%20roubaix+(Titre)&amp;ie=UTF8&amp;t=&amp;z=11&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/en/">embedgooglemaps FR</a> & <a href="https://kasinoutansvensklicens.nu/">https://kasinoutansvensklicens.nu/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br /> -->
                </div>
            </div>

           

        </div>
    </div>


<?php include("footer.php"); ?>