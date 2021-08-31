<!DOCTYPE html>
    <html>
        <head>
            <title>Login Page</title>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
            <link rel="stylesheet" href="css/connexion.css">
            <link rel="stylesheet" type="text/css" href="styles.css">
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
                        <form>
                            <!-- Username -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>

                                <input type="text" class="form-control" placeholder="username">
                            </div>

                            <!-- Email -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>

                                <input type="email" class="form-control" placeholder="email">
                                <input type="email" class="form-control" placeholder="email" disabled>
                            </div>

                            <!-- Password -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>

                                <input type="password" class="form-control" placeholder="Mots de passe">
                                <input type="password" class="form-control" placeholder="Mots de passe" disabled>
                            </div>

                            <!-- Confirm password -->
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>

                                <input type="password" class="form-control" placeholder="Mots de passe">
                                <input type="password" class="form-control" placeholder="Confirmation" disabled>
                            </div>

                            <!-- Btn -->
                            <div class="form-group mx-auto">
                                <input type="submit" value="Inscription" class="btn login_btn">
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