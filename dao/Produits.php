<?php
#region class test
    // class Produits {
    //     public int $id;
    //     public string $nomProduit;
    //     public float $prixMedium;
    //     public float $prixLarge;
    //     public string $descriptif;
    //     public string $cheminImage;
    //     public bool $actif;
    //     public int $categorie_id;

    //     //  ?bool $actif, int $cat_id )
    //     public function __construct(int $id, string $nom, float $prixMd, float $prixLg, ?string $desc, string $link, ?bool $actif) {
    //         $this-> id = $id;
    //         $this-> nomProduit = $nom;
    //         $this-> prixMedium = $prixMd;
    //         $this-> prixLarge = $prixLg;
    //         $this-> descriptif = $desc;
    //         $this-> cheminImage = $link;
    //         $this-> actif = $actif;
    //         // $this-> categorie_id = $cat_id;
    //     }

    //     public function Save(string $value):bool {
    //         switch ($value) {
    //             case 'insert':
    //                 # code...
    //                 break;
    //             case 'update':
    //                 # code...
    //                 break;
    //             case 'delete':
    //                 # code...
    //                 break;
    //         }
    //         return true;
    //     }

    // }
#endregion

#region class synthetise
    class Produits {
        public function __construct($fields = null) {
            if(isset($fields)){
                foreach($fields as $k => $v){
                    $this->{$k} = $v;
                }
            }
        }
    }
#endregion