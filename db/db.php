<?php

    //DEFINITION DES CONSTANTES
    define("port", 3307);
    define("dbHost", "localhost");
    define("dbName", "pizza");
    define("username", "root");
    define("password", "");


    // FONCTION DE CONNEXION A LA BDD
    function connexion(){
        $dsn = 'mysql:dbname=' . dbName . ';dbHost=' . dbHost . ';port=' . port . '';        //Connexion AFPA
        // $dsn = 'mysql:Host='.dbHost.';' .'dbname='.dbName .';'. username .';'. '' ;             //Connexion Nath
        
            try {
                //On se connecte à la base de donnée en instanciant PDO
                $bdd = new PDO($dsn, username, password, array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", 
                    PDO::ATTR_DEFAULT_FETCH_MODE => true
                ));

            }catch (PDOException $e) {
                die('error' . $e->getMessage());
            }
            return($bdd);
    }




    // try {
    //     $dbh = new PDO('mysql:host=localhost;dbname=pizza;port=3307', 'root', '', array(
    //         PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    //     ));

    // } catch (PDOException $e) {
    //     print "Erreur !: " . $e->getMessage() . "<br/>";
    //     die();
    // } return($dbh);










?>