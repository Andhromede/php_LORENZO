<?php

class Categories {

    // public $categorie;
    
    // public function __construct(string $category) {

    //     $this->categorie = $category;

    // }

    public function __construct($fields = null) {
        if(isset($fields)){
            foreach($fields as $k => $v){
                $this->{$k} = $v;
            }
        }
    }

}

?>