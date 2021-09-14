<?php 
    session_start();
  
    require_once("../MyData/data.php");
    require_once("../db/db.php");

    include_once("../dao/Utilisateurs.php");
    include_once("../dao/Role.php");
    include_once("../dao/Contacts.php");
    include_once("../dao/Produits.php");
    include_once("../dao/Categories.php");
    include_once("../dao/Horaires.php");
    include_once("../dao/Horaires.php" );



    


    function getPage(){
        $chemin = $_SERVER["REQUEST_URI"];
        $explode = explode("/", $chemin);
        $count = count($explode);
        $result = $explode[$count-2];
        return ($result);
    }











?>