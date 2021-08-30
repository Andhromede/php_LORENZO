<?php 
    require_once("db/db.php");
    include_once("header.php");

    $dbh = connexion();
    $sql =  'SELECT p.id, p.nomProduit, p.prixMedium, p.prixLarge, p.descriptif, c.NomCategorie FROM `produit` AS p, `categorie` AS c WHERE c.id = p.categorie_id' ;
    $produits = $dbh -> query($sql);
?>

<div class="container-fluid">

    <div class="text-center my-5">
        <h1>Liste des produits</h1>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Produit</th>
                <th scope="col">Prix Medium</th>
                <th scope="col">Prix Large</th>
                <th scope="col">Descriptif</th>
                <th scope="col">Categorie</th>
                <th scope="col">&nbsp;</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($produits as $pdt): ?>
                <tr class="">
                    <td><?= $pdt->nomProduit ?></td>
                    <td><?= $pdt->prixMedium ?> €</td>
                    <td><?= $pdt->prixLarge ?> €</td>
                    <td><?= $pdt->descriptif ?></td>
                    <td><?= $pdt->NomCategorie ?></td>
                    <td><button class="btn btn-success modifier" id="<?= $pdt->id ?>" data-toggle="modal" data-target="#modalProduits" onclick="loadData(this.getAttribute('data-id'));" data-id='<?= $pdt->id?>' >Modifier</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    

    <?php 
        $dbh = connexion();
        $sql =  "SELECT p.id, p.nomProduit, p.prixMedium, p.prixLarge, p.descriptif, c.NomCategorie FROM produit AS p, categorie AS c 
                WHERE c.id = p.categorie_id AND p.id =".$pdt['id'];
        $produits = $dbh -> query($sql); 
    ?>


    <!-- MODAL -->
    <div class="modal" tabindex="-1" role="dialog" id="modalProduits">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="listeProduits.php" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btnModalProduits"  data-dismiss="modal">Valider</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>


    <script> 
        // modal
        $('.modal').on('shown.bs.modal',function(){
            $('.btnModalProduits').on('click',function(){
                alert('TOTO');
                // window.location = 'listeProduits.php';
            });
        });

        $('.modal').modal('show');




        function loadData(id) {
            $.ajax({
                url: "listeProduits.php",
                method: "POST",
                data: {get_data: 1, id: id},
                success: function (response) {
                console.log(response);
            }
        });
    }
    </script>


   
    <?php
        include_once('footer.php');
    ?>
