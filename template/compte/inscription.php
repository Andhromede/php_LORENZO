<?php 
    require_once("../../db/db.php");
    include_once("../../dao/Utilisateurs.php");
    include_once("../../dao/Role.php");
    session_start();

    if(isset($_POST['txtEmail'], $_POST['txtLogin'], $_POST['txtPassword'], $_POST['txtConfirmPassword']) &&
        !empty($_POST['txtEmail']) && 
        !empty( $_POST['txtLogin']) && 
        !empty( $_POST['txtPassword']) && 
        !empty($_POST['txtConfirmPassword']) ){

        //Pour nettoyer les donnees entrées par l'user et eviter les xss injections
        $login = htmlspecialchars(strip_tags(stripslashes(trim($_POST['txtLogin']))));
        $email = htmlspecialchars(strip_tags(stripslashes(trim($_POST['txtEmail']))));
        $password = htmlspecialchars(strip_tags(stripslashes(trim($_POST['txtPassword']))));
        $confirmPassword = htmlspecialchars(strip_tags(stripslashes(trim($_POST['txtConfirmPassword']))));
        $roleId = intval("3");

        if($_POST['txtPassword'] == $_POST['txtConfirmPassword']){
            $newPassword = password_hash($password, PASSWORD_ARGON2ID);

            $newUser = new Utilisateurs([
                'login' => $login, 
                'email' => $email, 
                'password' => $newPassword, 
                'role_id' => $roleId
            ]);
            
            $utilisateur=$newUser->searchBy($email);

            if(!$utilisateur){
                $newUser->saveUser('add', $newUser);
                header("Location: ../accueil.php");
            }else{
                echo('<div class="alert alert-danger mt-4 fixed-top messageConnexion" role="alert">
                        Cette adresse mail est déjà utilisée !
                    </div>');
            }

        }else{
            echo'<div class="alert alert-danger mt-4 fixed-top messageConnexion" role="alert">
                    Les deux mots de passe doivent être identiques !
                </div>';
        }

    }else{
        echo'<div class="alert alert-danger mt-4 fixed-top messageConnexion" role="alert">
                Tous les champs doivent être remplis !
            </div>';
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
                        <h3>Inscription</h3>

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

                            <!-- Username -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>

                                <input type="text" class="form-control" placeholder="Login" name="txtLogin" required>
                            </div>

                            <!-- Email -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>

                                <input type="email" class="form-control" placeholder="Email" name="txtEmail" required>
                                <!-- <input type="email" class="form-control" placeholder="email" disabled> -->
                            </div>

                            <!-- Password -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>

                                <input type="password" class="form-control" placeholder="Mots de passe" name="txtPassword" required>
                                <!-- <input type="password" class="form-control" placeholder="Mots de passe" disabled> -->
                            </div>

                            <!-- Confirm password -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>

                                <input type="password" class="form-control" placeholder="Mots de passe" name="txtConfirmPassword" required>
                                <!-- <input type="password" class="form-control" placeholder="Confirmation" disabled> -->
                            </div>

                            <!-- Btn -->
                            <div class="form-group mx-auto">
                                <button type="submit" value="Valider" class="btn login_btn">Valider</button>
                            </div>

                        </form>
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
    }, 5000);
</script>