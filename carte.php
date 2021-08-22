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
                    LES PIZZAS
                </h3>

                <!-- ligne 1 -->
                <div class="col-12 d-flex mb-5">
                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/base.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Margherita</h5>
                            <p class="card-text">Sauce tomate à l'origan, mozzarella et basilic frais.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center">Large 12,50€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium 9,50€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/Royale.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Royale</h5>
                            <p class="card-text">Sauce tomate à l'origan, jambon, mozzarella et champignons frais.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center">Large 12,90€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium 10,90€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/orientale.jpeg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Orientale</h5>
                            <p class="card-text">Sauce tomate à l'origan, mozzarella, merguez et champignons frais.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center heighTxt">Large 14,50€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium 12,50€</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ligne 2 -->
                <div class="col-12 d-flex mb-5">
                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/maroilles.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Ch'ti</h5>
                            <p class="card-text">Crème fraiche, mozzarella, maroilles et lard fumé.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center">Large 14,50€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium 12,50€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/4fromages.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">4 Fromages</h5>
                            <p class="card-text">Crème fraiche, mozzarella, emmental, fromage de chèvre, gorgonzola.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center">Large 15,90€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium 13,90€</div>
                            </div>
                            <!-- <a href="" class="btn btn-success">Détails</a> -->
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/montagnarde.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Montagnarde</h5>
                            <p class="card-text">Crème fraiche, mozzarella, jambon cru, fromage à raclette et champignons frais.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center">Large 15,50€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium 13,50€</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ligne 3 -->
                <div class="col-12 d-flex mb-5">
                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/vege4.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Végé.</h5>
                            <p class="card-text">Sauce tomate à l'origan, mozzarella, champignons, oignons rouges, poivrons verts, tomages fraiches et olives noires .</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center">Large 13,50€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium 11,50€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/mer2.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Oceane</h5>
                            <p class="card-text">Sauce tomate a l'origan, mozarella, moules, crevettes, calamars, poivrons.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center">Large 17,30€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium 15,30€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/pizzas/jParme.png" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Parmesane</h5>
                            <p class="card-text">crème fraiche, mozzarella, jambon de parme, champignons, noix, parmesan.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center">Large 14,40€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Medium 12,40€</div>
                            </div>
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
                            <p class="card-text">Salade romaine, filets de poulets rotis, tomates cerises, oeufs dur, copeaux de parmesan, sauce cesar.</p>
                            <div class="text-center card-title font-weight-bolder pxNeg text-center">12,50€</div>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/mediteraneene.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Salade méditerranéenne</h5>
                            <p class="card-text">Salade, avocat, tomates, oignons rouges, poulet roti, sauce vinaigre balsamique.</p>
                            <div class="text-center card-title font-weight-bolder pxNeg text-center">10,80€</div>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/oignons.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Oignons Rings</h5>
                            <p class="card-text">Un classique américain, des rondelles d'oignons frits.</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 4 2,80€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 9 5,50€</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ligne 2 -->
                <div class="col-12 d-flex mb-5">
                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/nuggets2.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Nuggets</h5>
                            <p class="card-text">Des filets de poulets pannées et frits.</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 4 3,90€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 9 7,80€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/painAil3.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Pain à l'ail</h5>
                            <p class="card-text">Du pain froté à l'ail et au persil, fouré à la mozarella puis gratinée.</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">à l'unité 3,50€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 2 5,50€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/entrees/tartine.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Bruschetta Tomate mozza</h5> 
                            <p class="card-text">Deux grande tranche de gratinées, recouvertes de tomates fraiches et de mozzarella.</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">à l'unité 3,50€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 2 5,50€</div>
                            </div>
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
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/panacota.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Panna Cotta</h5>
                            <h5 class="card-title font-weight-bolder">2,80€</h5>
                            <p class="card-text">Un classique italien à base de crème et de lait gélifié accompagné d'un coulis de fruits rouge, de caramel ou de chocolat</p>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/canelloni2.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Cannoli Sicilien</h5>
                            <p class="card-text">Tuile italienne fourrée d'une crème à la ricotta aromatisé au citron.</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 2 4,90€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 4 8,00€</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ligne 2 -->
                <div class="col-12 d-flex mb-5">
                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/brownie.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Brownie</h5>
                            <p class="card-text">Le classique américain au chocolat et aux noisettes.</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">à l'unité 3,50€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 3 7,00€</div>
                            </div>
                            <!-- <a href="" class="btn btn-success">Détails</a> -->
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/glaces2.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Pot de glace</h5>
                            <p class="card-text">Crème glacée au choix : Vanille, Chocolat, Cookie, Caramel beurre salé, Pecan ou Dulce De Leche</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">100ml 3,00€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">200ml 5,50€</div>
                            </div>
                            <!-- <a href="" class="btn btn-success">Détails</a> -->
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/desserts/cookie.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Cookie</h5>
                            <p class="card-text">Parfum au choix : tout chocolat, pétites de chocolat, cranberrie et chocolat blanc ou vanille aux éclats de noisettes.</p>
                            <div class="row">
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">à l'unité 2,00€</div>
                                <div class=" col-6 card-title font-weight-bolder pxNeg text-center">par 3 5,00€</div>
                            </div>
                            <!-- <a href="#" class="btn btn-success">Détails</a> -->
                        </div>
                    </div>
                </div>




                




                <!-- LES BOISSONS -->
                <h3 class="text-center mb-4">
                    LES BOISSONS
                </h3>

                <!-- ligne 1 -->
                <div class="col-12 d-flex mb-5">
                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/boissons/sodas.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Sodas</h5>
                            <p class="card-text">Coca-Cola, Fanta, IceTea, Oasis, Jus d'orange, Jus de pomme, Perrier, Vitel.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center">33cl <br>2€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">1,5L <br>3,50€</div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/boissons/bieres2.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Bières</h5>
                            <p class="card-text">Heineken, Desperado, Pelforth ambré, Tourtelle twist (sans alcool).</p>
                            <div class="card-title font-weight-bolder pxNeg text-center">33cl  <br>3,00€</div>
                        </div>
                    </div>

                    <div class="card col-3 px-3 mx-auto">
                        <img class="card-img-top imgSize mx-auto py-3" src="img/boissons/rose.jpg" alt="Card image cap">
                        
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bolder">Vins</h5>
                            <p class="card-text">Côtes de Provences<br>ou<br>Beaujolais Villages.</p>
                            <div class="row">
                                <div class=" col-5 card-title font-weight-bolder pxNeg text-center heighTxt">Rosé 9,50€</div>
                                <div class=" col-7 card-title font-weight-bolder pxNeg text-center">Rouge 9,80€</div>
                            </div>
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