<?php   
    $titre ="Accueil";
    include_once("header.php");
    // include("navbar.php");
    include_once("navbar.php");
?>

<body>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img\carou acceuil\paysage italie.jpg" class="d-block w-100" alt="...">
            </div>
            
            <div class="carousel-item">
                <img src="img\carou acceuil\Meat-Lovers-Pizza.jpg" class="d-block w-100" alt="...">
            </div>
            
            <div class="carousel-item">
                <img src="img\carou acceuil\vegetarienne.jpg" class="d-block w-100" alt="...">
            </div>
            
            <div class="carousel-item">
                <img src="img\carou acceuil\most-expensive-pizza.jpg" class="d-block w-100" alt="...">
            </div>
            
            <div class="carousel-item">
                <img src="img\carou acceuil\hawaii.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div> 
</body>

<?php include("footer.php") ?>
    
    
