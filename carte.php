<?php   
    $titre ="carte";
    include_once("header.php");
    // include("navbar.php");
    include_once("navbar.php");
?>

    <div class="container-fluid mt-affichage">

        <!-- Bandeau gris -->
        <div class="row bg-secondary text-light justify-content-center py-2">
            <div href="" class="col-1 text-center h5 lien">ENTREES</div>
            <div href="" class="col-1 text-center h5 lien">PIZZAS</div>
            <div href="" class="col-1 text-center h5 lien">DESSERTS</div>
            <div href="" class="col-1 text-center h5 lien">BOISSONS</div>
        </div>


        <div class="row mt-5">
            <div class="col-8">
                
            <!-- PIZZAS CLASSIQUES -->
                <h3 class="text-center mb-4">
                    LES PIZZAS CLASSIQUES
                </h3>

                <!-- ligne 1 -->
                <div class="col-12 d-flex mb-5">
                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/base.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Margherita</h5>
                            <h5 class="card-title font-weight-bolder">9,50€</h5>
                            <p class="card-text">Sauce tomate à l'origan, mozzarella et basilic frais.</p>
                            <a href="" class="btn btn-success">Détails</a>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/Royale.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Royale</h5>
                            <h5 class="card-title font-weight-bolder">10,90€</h5>
                            <p class="card-text">Sauce tomate à l'origan, jambon, mozzarella et champignons frais.</p>
                            <a href="" class="btn btn-success">Détails</a>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/orientale.jpeg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Orientale</h5>
                            <h5 class="card-title font-weight-bolder">12,50€</h5>
                            <p class="card-text">Sauce tomate à l'origan, mozzarella, merguez et champignons frais.</p>
                            <a href="#" class="btn btn-success">Détails</a>
                        </div>
                    </div>
                </div>

                <hr class="w-75">
                
            <!-- PIZZAS FROMAGES -->
                <h3 class="text-center mb-4">
                    LES PIZZAS AUX FROMAGES
                </h3>

                <!-- ligne 2 -->
                <div class="col-12 d-flex mb-5">
                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/maroilles.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Ch'ti</h5>
                            <h5 class="card-title font-weight-bolder">12,50€</h5>
                            <p class="card-text">Crème fraiche, mozzarella, maroilles et lard fumé.</p>
                            <a href="" class="btn btn-success">Détails</a>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/4fromages.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">4 Fromages</h5>
                            <h5 class="card-title font-weight-bolder">13,80€</h5>
                            <p class="card-text">Crème fraiche, mozzarella, emmental, fromage de chèvre, gorgonzola.</p>
                            <a href="" class="btn btn-success">Détails</a>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/montagnarde.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Montagnarde</h5>
                            <h5 class="card-title font-weight-bolder">13,50€</h5>
                            <p class="card-text">Crème fraiche, mozzarella, jambon cru, fromage à raclette et champignons frais.</p>
                            <a href="#" class="btn btn-success">Détails</a>
                        </div>
                    </div>
                </div>

                <hr class="w-75">

            <!-- PIZZAS ORIGINALES -->
                <h3 class="text-center mb-4">
                    LES PIZZAS ORIGINALES
                </h3>

                <!-- ligne 3 -->
                <div class="col-12 d-flex mb-5">
                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/vege4.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Végé.</h5>
                            <h5 class="card-title font-weight-bolder">11,50€</h5>
                            <p class="card-text">Sauce tomate à l'origan, mozzarella, champignons, oignons rouges, poivrons verts, tomages fraiches et olives noires .</p>
                            <a href="" class="btn btn-success">Détails</a>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/mer2.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Oceane</h5>
                            <h5 class="card-title font-weight-bolder">15,30€</h5>
                            <p class="card-text">Sauce tomate a l'origan, mozarella, moules, crevettes, calamars, poivrons.</p>
                            <a href="" class="btn btn-success">Détails</a>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/jParme.png" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Parmesane</h5>
                            <h5 class="card-title font-weight-bolder">12,40€</h5>
                            <p class="card-text">crème fraiche, mozzarella, jambon de parme, champignons, noix, parmesan.</p>
                            <a href="#" class="btn btn-success">Détails</a>
                        </div>
                    </div>
                </div>

                <hr class="w-75">

            <!-- LES ENTREES -->
                <h3 class="text-center mb-4">
                    LES ENTREES
                </h3>

                <!-- ligne 1 -->
                <div class="col-12 d-flex mb-5">
                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/cesar.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Salade César</h5>
                            <h5 class="card-title font-weight-bolder">9,50€</h5>
                            <p class="card-text">Salade romaine, filets de poulets rotis, tomates cerises, oeufs dur, copeaux de parmesan, sauce cesar.</p>
                            <a href="" class="btn btn-success">Détails</a>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/mediteraneene.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Salade méditerranéenne</h5>
                            <h5 class="card-title font-weight-bolder">10,80€</h5>
                            <p class="card-text">Salade, avocat, tomates, oignons rouges, poulet roti, sauce vinaigre balsamique.</p>
                            <a href="" class="btn btn-success">Détails</a>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/oignons.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Oignons Rings x4</h5>
                            <h5 class="card-title font-weight-bolder">2,80€</h5>
                            <p class="card-text">Un classique américain, des rondelles d'oignons frits.</p>
                            <a href="#" class="btn btn-success">Détails</a>
                        </div>
                    </div>
                </div>

                <!-- ligne 2 -->
                <div class="col-12 d-flex mb-5">
                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/nuggets2.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Nuggets x5</h5>
                            <h5 class="card-title font-weight-bolder">5,20€</h5>
                            <p class="card-text">Des filets de poulets pannées et frits.</p>
                            <a href="" class="btn btn-success">Détails</a>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/painAil3.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Pain à l'ail x1</h5>
                            <h5 class="card-title font-weight-bolder">4,90€</h5>
                            <p class="card-text">Du pain froté à l'ail et au persil, fouré à la mozarella puis gratinée.</p>
                            <a href="" class="btn btn-success">Détails</a>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/tartine.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Bruschetta Tomate mozza x2</h5> 
                            <h5 class="card-title font-weight-bolder">5,80€</h5>
                            <p class="card-text">Deux grande tranche de gratinées, recouvertes de tomates fraiches et de mozzarella.</p>
                            <a href="#" class="btn btn-success">Détails</a>
                        </div>
                    </div>
                </div>

                <hr class="w-75">

                <!-- LES DESSERTS -->
                <h3 class="text-center mb-4">
                    LES DESSERTS
                </h3>

                <!-- ligne 1 -->
                <div class="col-12 d-flex mb-5">
                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/tiramisu.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Tiramisu</h5>
                            <h5 class="card-title font-weight-bolder">3,50€</h5>
                            <p class="card-text">Crème gourmande a la mascarpone, biscuits cuillère, café et cacao.</p>
                            <a href="" class="btn btn-success">Détails</a>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/panacota.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Panna Cotta</h5>
                            <h5 class="card-title font-weight-bolder">2,80€</h5>
                            <p class="card-text">Un classique italien à base de crème et de lait gélifié accompagné d'un coulis de fruits rouge, de caramel ou de chocolat</p>
                            <a href="" class="btn btn-success">Détails</a>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/canelloni2.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Cannoli Sicilien x2</h5>
                            <h5 class="card-title font-weight-bolder">4,90€</h5>
                            <p class="card-text">Tuile italienne fourrée d'une crème à la ricotta aromatisé au citron.</p>
                            <a href="#" class="btn btn-success">Détails</a>
                        </div>
                    </div>
                </div>

                <!-- ligne 2 -->
                <div class="col-12 d-flex mb-5">
                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/brownie.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Brownie x1</h5>
                            <h5 class="card-title font-weight-bolder">3,50€</h5>
                            <p class="card-text">Le classique américain au chocolat et aux noisettes.</p>
                            <a href="" class="btn btn-success">Détails</a>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/glaces2.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Pot de glace 100ml</h5>
                            <h5 class="card-title font-weight-bolder">3,00€</h5>
                            <p class="card-text">Crème glacée au choix : Vanille, Chocolat, Cookie, Caramel beurre salé, Pecan ou Dulce De Leche</p>
                            <a href="" class="btn btn-success">Détails</a>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/cookie.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Cookie x1</h5>
                            <h5 class="card-title font-weight-bolder">2€</h5>
                            <p class="card-text">Parfum au choix : tout chocolat, pétites de chocolat, cranberrie et chocolat blanc ou vanille aux éclats de noisettes.</p>
                            <a href="#" class="btn btn-success">Détails</a>
                        </div>
                    </div>
                </div>

            </div> 
        
            <!-- Section de droite -->
            <div class="col-4">
                <div>
                  
                </div>
            </div>
        </div>



    </div>


<?php include("footer.php") ?>