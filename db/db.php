<?php

//Définition des constantes
define("port", 3307);
define("dbHost", "localhost");
define("dbName", "pizza");
define("username", "root");
define("password", "");

$dsn = 'mysql:dbname=' . dbName . ';host=' . dbHost . ';port=' . port . '';




//On établit la connexion à la base
try {

    //On se connecte à la base de donnée en instanciant PDO
    $bdd = new PDO($dsn, username, password);

    //On définit le charset à UTF8
    $bdd->exec("SET NAMES utf8");

    //On définit la méthode de récupération (fetch) des données
    $bdd ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die('error' . $e->getMessage());
}




?>