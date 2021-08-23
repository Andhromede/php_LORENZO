<?php
$titre = "Accueil";
include_once("header.php");
include_once("navbar.php");
?>

<body>

    <!-- <div id="carouselExampleControls" class="carousel slide bg-secondary" data-ride="carousel">
            <div class="carousel-inner col-6 mx-auto mt-affichage">
                <div class="carousel-item active sizeImg">
                    <img src="img\caroussel\champis.jpg" class="d-block w-100 mt-affichage" alt="...">
                </div>
                
                <div class="carousel-item sizeImg">
                    <img src="img\caroussel\chorizo3.jpg" class="d-block w-100 mt-affichage" alt="...">
                </div>
                
                <div class="carousel-item sizeImg">
                    <img src="img/pizzas/jambon.jpg" class="d-block w-100 mt-affichage" alt="...">
                </div>
                
                <div class="carousel-item sizeImg">
                    <img src="img\pizzas\royale.jpg" class="d-block w-100 mt-affichage" alt="...">
                </div>
                
                <div class="carousel-item sizeImg ">
                    <img src="img\pizzas\vege4.jpg" class="d-block w-100 mt-affichage sizeImg" alt="...">
                </div>
            
                <a class="carousel-control-prev " href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>  -->

    <div class="container-fluid bg-secondary mt-affichage">

        <h3 class="text-center pt-5 text-light font-weight-bolder">QUOI DE NEUF CHEZ LORENZO ?</h3>

        <div id="carouselExampleCaptions" class="carousel slide col-6 mx-auto" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img\caroussel\champis.jpg" class="d-block w-100 mt-affichage" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>La pizza de la semaine </h5>
                        <p>La cannibale, avec son boeuf haché, et ses poulet émincé, elle saurra satisfaire tous les amateurs de viande.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img\caroussel\chorizo3.jpg" class="d-block w-100 mt-affichage" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>La spécialité du chef</h5>
                        <p>La pizza peperronni, avec ses saveurs italiennes c'est tout un voyage en italie !</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img\pizzas\mer.jpg" class="d-block w-100 mt-affichage" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>La nouveauté du mois</h5>
                        <p>L'Océane, avec ses fruits de mer frais, elle saura vous donner un avant-gout des vacances ! </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>

</body>

<?php include("footer.php") ?>