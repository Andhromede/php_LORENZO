<?php

class Produits
{

    public $nomProduit;
    public $taille;
    public $prix;
    public $descriptif;


    public function __construct(string $productName, string $size, float $price, string $description)
    {
        $this-> nomProduit = $productName;
        $this-> taille = $size;
        $this-> prix = $price;
        $this-> descriptif = $description;
        
    }

    public function Save(string $value):bool
    {
        switch ($value) {
            case 'insert':
                # code...
                break;
            case 'update':
                # code...
                break;
            case 'delete':
                # code...
                break;
        }
       

        return true;
    }

}
