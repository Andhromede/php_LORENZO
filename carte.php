<?php   
    $titre ="carte";
    include_once("header.php");
    // include("navbar.php");
    include_once("navbar.php");
?>

    <div class="container-fluid mt-navbar">
        <!-- Bandeau gris -->
        <div class="row bg-secondary text-light justify-content-center">
            <div href="" class="col-1 text-center h5 lien">ENTREES</div>
            <div href="" class="col-1 text-center h5 lien">PIZZAS</div>
            <div href="" class="col-1 text-center h5 lien">DESSERTS</div>
            <div href="" class="col-1 text-center h5 lien">BOISSONS</div>
        </div>


        <div class="d-flex">
            <div class="card col-3" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="card col-3" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

    <div class="card col-3" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

<?php include("footer.php") ?>