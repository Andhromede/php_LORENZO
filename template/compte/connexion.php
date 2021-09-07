<?php
     require_once("../../db/db.php");
     include_once("../../dao/Utilisateurs.php");
     include_once("../../dao/Role.php");
    
     
     
    if(isset($_POST) && !empty($_POST)){

        if( isset($_POST['txtEmail']) && !empty($_POST['txtEmail']) && 
            isset($_POST['txtPassword']) && !empty($_POST['txtPassword'])){

            $email = htmlentities( $_POST['txtEmail']);
            $dbh = connexion();
            $sql =  "SELECT * FROM utilisateur where email = :email";
            $query = $dbh -> prepare($sql);
            $query->bindValue("email", $email);
            $query->execute();
            $utilisateur = $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "utilisateurs");
   
            if(!$utilisateur) {
                echo('<div class="alert alert-danger mt-4 fixed-top messageConnexion" role="alert">
                        Erreur d\'authentification !
                    </div>');
            }
            
            else {
                $password = $_POST['txtPassword'];
                $hash = $utilisateur[0]->password;

                if(password_verify($password, $hash)){
                    $_SESSION['login'] = $utilisateur[0]->login;
                    header('Location: ../accueil.php');
                }
            }
            
        }
    }    
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Login Page</title>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
            <link rel="stylesheet" href="../../css/connexion.css">
            <link rel="stylesheet" type="text/css" href="../../css/styles.css">
        </head>

    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">

                    <div class="card-header">
                        <h3>Connexion</h3>

                        <!-- 
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-google-plus-square"></i></span>
                            <span><i class="fab fa-twitter-square"></i></span>
                        </div>
                        -->
                    </div>

                    <div class="card-body">
                        <form action="" method="post">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>

                                <input type="email" class="form-control" placeholder="email" name="txtEmail">
                            </div>

                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>

                                <input type="password" class="form-control" placeholder="password" name="txtPassword">
                            </div>

                            <!-- <div class="row align-items-center remember">
                                <input type="checkbox">Rester connecté
                            </div> -->

                            <div class="form-group">
                                <input type="submit" value="Connexion" class="btn float-right login_btn">
                            </div>
                        </form>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Pas encore de compte ?<a href="#">Inscription</a>
                        </div>

                        <!-- <div class="d-flex justify-content-center">
                            <a href="#">Mots de passe oublié</a>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </body>
</html>

<script>
    setTimeout(function(){ 
        $('.messageConnexion').addClass('d-none');
    }, 3000);
</script>