<?php

 class Role {
    public function __construct($fields = null) {
        if(isset($fields)){
            foreach($fields as $k => $v){
                $this->{$k} = $v;
            }
        }
    }
}
?>