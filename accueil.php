<?php
     require_once("MyData/data.php");
     $titre=$titreAccueil;
     include_once $linkHeader;
     include_once $linkNavBar;
?>

<link rel="stylesheet" href="css/accueil.css">

<body>
    <!-- <div class="container-fluid bg-secondary affichage mb-4">
        <div class="text-center pt-5 text-light">
            <u class="h3 font-weight-bolder">LES NOUVEAUTES :</u>
        </div>

        <div id="carouselExampleCaptions" class="carousel slide col-6 mx-auto pb-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img\caroussel\champis.jpg" class="d-block w-100 affichage" alt="...">
                    <div class="carousel-caption d-none d-md-block bgOpac">
                        <h5>La pizza de la semaine </h5>
                        <p>La cannibale, avec son boeuf haché, et ses poulet émincé, elle saurra satisfaire tous les amateurs de viande.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img\caroussel\chorizo3.jpg" class="d-block w-100 affichage" alt="...">
                    <div class="carousel-caption d-none d-md-block bgOpac">
                        <h5>La spécialité du chef</h5>
                        <p>La pizza peperronni, avec ses saveurs italiennes c'est tout un voyage en italie !</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img\pizzas\mer.jpg" class="d-block w-100 affichage" alt="...">
                    <div class="carousel-caption d-none d-md-block bgOpac">
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
    </div> -->















    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center w-100 ">
        <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Bienvenu chez <span>Lorenzo</span></h1>
                    
                    <h2>De bons produits frais et fait maison, aux saveurs de l'italie !</h2>

                    <div class="btns">
                        <a href="#menu" class="btn-menu animated fadeInUp scrollto">Notre carte</a>
                        <!-- <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Réservation</a> -->
                    </div>
                </div>

                <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
                </div>

            </div>
        </div>
    </section>


    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Mesures sanitaires :</h3>
                        <br>
                        
                        <p class="font-italic">
                            Notre restaurant est à nouveau ouvert et ceux dans le plus grand respect des règles sanitaires en vigueur. Chez Lorenzo, nous mettons un point d'honneur à votre santée 
                            et n'hésitons pas à tout mettre en oeuvre afin que vous puissiez passer un moment agréable et en toute sécurité !
                        </p>

                        <p> 
                            A compter du 9 Août et conformément à la loi du 31 mai 2021, l’accès aux restaurants, bars et cafés est soumis à la présentation obligatoire du Pass sanitaire.
                        </p>

                        <hr>

                        <ul>
                            De plus :
                            <li>
                                <i class="icofont-check-circled"></i> 
                                - Tout notre personnel porte un masque jetable ainsi que des gants et ceux-ci sont remplacés très régulièrement.
                            </li>

                            <li>
                                <i class="icofont-check-circled"></i> 
                                - Nous nettoyons et désinfectons tout notre materiel entre chaque clients.
                            </li>
                            
                            <li>
                                <i class="icofont-check-circled"></i> 
                                - Nous privilegions le paiement sans contact et désinfectons nos terminaux après chaque passage.
                            </li>

                            <li>
                                <i class="icofont-check-circled"></i> 
                                - Nos tables sont éspacées d'au moins 1,5m et désomais séparés par des vitres afin d'éviter tout risque de contamination.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Lorenzo</h2>
                    <p>Actuellement</p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <span>La pizza du mois</span>
                            <h4>L'Océance</h4>
                            <p>L'Océane, avec ses fruits de mer frais, elle saura vous donner un avant-gout des vacances.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="200">
                            <span>Cette semaine</span>
                            <h4>L'Annibal</h4>
                            <p>Avec son boeuf haché, ses merguez épicées et son poulet émincé, elle saurra satisfaire tous les amateurs de viande.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="300">
                            <span>La pizza du chef</span>
                            <h4>La pepperonni</h4>
                            <p>Avec ses saveurs italiennes c'est tout un voyage au coeur de l'italie.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Lorenzo</h2>
                    <p>Menu</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">
                            <li data-filter="*" class="filter-active">Tous</li>
                            <li data-filter=".filter-starters">Entrées</li>
                            <li data-filter=".filter-salads">Pizzas</li>
                            <li data-filter=".filter-specialty">Desserts</li>
                            <li data-filter=".filter-specialty">Boissons</li>
                        </ul>
                    </div>
                </div>

                <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="img/pizzas/orientale.jpeg" class="menu-img" alt="">
                        
                        <div class="menu-content">
                            <a href="#">La pizza Orientale</a><div><span>12.5€ / 14.5€</span>(Maxi)</div>
                        </div>

                        <div class="menu-ingredients">
                            Sauce tomate à l'origan, mozzarella, merguez et champignons frais.
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="img/pizzas/base2.jpg" class="menu-img" alt="">
                        
                        <div class="menu-content">
                            <a href="#">La pizza Margherita</a><div><span>9.5€ / 12.5€</span>(Maxi)</div>
                        </div>

                        <div class="menu-ingredients">
                            Sauce tomate à l'origan, mozzarella et basilic frais.
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="img/pizzas/royale.jpg" class="menu-img" alt="">
                        
                        <div class="menu-content">
                            <a href="#">La pizza Royale</a><div><span>10.9€ / 12.9€</span>(Maxi)</div>
                        </div>

                        <div class="menu-ingredients">
                            Sauce tomate à l'origan, jambon, mozzarella et champignons frais.
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="img/pizzas/maroilles.jpg" class="menu-img" alt="">
                        
                        <div class="menu-content">
                            <a href="#">La pizza Ch'ti</a><div><span>12.5€ / 14.5€</span>(Maxi)</div>
                        </div>

                        <div class="menu-ingredients">
                            Crème fraiche, mozzarella, maroilles et lard fumé.
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
                        
                        <div class="menu-content">
                            <a href="#">Tuscan Grilled</a><span>$9.95</span>
                        </div>

                        <div class="menu-ingredients">
                            Grilled chicken with provolone, artichoke hearts, and roasted red pesto
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="img/menu/mozzarella.jpg" class="menu-img" alt="">
                        
                        <div class="menu-content">
                            <a href="#">Mozzarella Stick</a><span>$4.95</span>
                        </div>

                        <div class="menu-ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="img/menu/greek-salad.jpg" class="menu-img" alt="">
                        
                        <div class="menu-content">
                            <a href="#">Greek Salad</a><span>$9.95</span>
                        </div>

                        <div class="menu-ingredients">
                            Fresh spinach, crisp romaine, tomatoes, and Greek olives
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="img/menu/spinach-salad.jpg" class="menu-img" alt="">
                        
                        <div class="menu-content">
                            <a href="#">Spinach Salad</a><span>$9.95</span>
                        </div>

                        <div class="menu-ingredients">
                            Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="img/menu/lobster-roll.jpg" class="menu-img" alt="">
                        
                        <div class="menu-content">
                            <a href="#">Lobster Roll</a><span>$12.95</span>
                        </div>

                        <div class="menu-ingredients">
                            Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ======= Specials Section ======= -->
        <section id="specials" class="specials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Lorenzo</h2>
                    <p>A propos de nous</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Ou sommes-nous ?</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-2">Nos horraires</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-3">Nous contacter</a>
                            </li>

                            <!-- <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
                            </li> -->
                        </ul>
                    </div>

                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Notre adresse :</h3>

                                        <!-- <p class="font-weight-bolder">20 rue du Luxembourg, 59100 Roubaix.</p> -->
                                        <p class="font-italic">20 rue du luxembourg,</p>
                                        <p class="font-italic">59100 Roubaix</p>
                                    </div>

                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/specials-1.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Heures d'ouverture :</h3>

                                        <p class="font-italic">
                                            du mardi au samedi : 11h00 - 15h00 / 18h00-23h.
                                        </p>
                                    </div>

                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/specials-2.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Nous contacter :</h3>

                                        <p class="font-italic">tel: 09.49.05.49.72</p>
                                        <p>mail: lorenzo.pizza@gmail.com</p>
                                    </div>

                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/specials-3.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Events</h2>
                    <p>Organize Your Events in our Restaurant</p>
                </div>

                <div class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">

                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                        </div>
                        
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>Birthday Parties</h3>

                            <div class="price">
                                <p><span>$189</span></p>
                            </div>

                            <p class="font-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>

                            <ul>
                                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            </ul>

                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                            </p>
                        </div>
                    </div>

                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>Private Parties</h3>

                            <div class="price">
                                <p><span>$290</span></p>
                            </div>

                            <p class="font-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>

                            <ul>
                                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            </ul>

                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur
                            </p>
                        </div>
                    </div>

                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>Custom Parties</h3>

                            <div class="price">
                                <p><span>$99</span></p>
                            </div>

                            <p class="font-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>

                            <ul>
                                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            </ul>

                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Lorenzo</h2>
                    <p>Gallerie photos</p>
                </div>
            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                                <img src="img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                                <img src="img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                                <img src="img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                                <img src="img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                                <img src="img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                                <img src="img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                                <img src="img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                                <img src="img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


       


        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Lorenzo</h2>
                    <p>Contactez-nous</p>
                </div>

                <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                    <div class="form-row">
                        <div class="col-6 form-group">
                            <input type="text" name="name" class="form-control" id="txtNom" placeholder="Nom"
                                data-rule="minlen:4" data-msg="Veuillez completer ce champs">
                            <div class="validate"></div>
                        </div>

                        <div class="col-6 form-group">
                            <input type="email" class="form-control" name="email" id="txtEmail" placeholder="Email"
                                data-rule="email" data-msg="Veuillez renseigner un email valide">
                            <div class="validate"></div>
                        </div>

                        <div class="col-12 form-group">
                            <input type="text" class="form-control" name="sujet" id="txtSujet"
                                placeholder="Sujet" data-rule="minlen:1" data-msg="Veuillez completer ce champs">
                            <div class="validate"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>

                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message">Erreur lors de l'envoi de votre message !</div>
                        <div class="sent-message">Votre message à bien été envoyé !</div>
                    </div>

                    <div class="text-center"><button type="submit">Envoyer</button></div>
                </form>
            </div>
        </section>
    </main>

   





</body>

<?php include("footer.php") ?>