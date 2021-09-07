<?php
 require_once("../../db/db.php");
 class Utilisateurs {
    public function __construct($fields = null) {
        if(isset($fields)){
            foreach($fields as $k => $v){
                $this->{$k} = $v;
            }
        }
    }

    //FONCTION SEARCH BY
    function searchBy($value){
        $dbh = connexion();
        $sql =  "SELECT * FROM utilisateur where email = :email";
        $query = $dbh -> prepare($sql);
        $query->bindValue("email", $value);
        $query->execute();
        $utilisateur = $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE);
        // $utilisateur = $query->fetchAll(PDO::FETCH_OBJ);
        return $utilisateur;
    }

    //FONCTION SAVE USER
    function saveUser($value, $object){
        $dbh = connexion();

        switch ($value) {
            case 'add':
                $insert = $dbh -> prepare("INSERT INTO utilisateur(login, email, password, role_id) VALUES (:login, :email, :password, :role_id)");
                $insert -> bindParam('login',$object->login);
                $insert -> bindParam('email', $object->email);
                $insert -> bindParam('password', $object->password);
                $insert -> bindParam('role_id', $object->role_id);
                $result = $insert -> execute();
            break;
            
            case 'update':
                $update = $dbh -> prepare("UPDATE utilisateur SET 'login'=:login, 'email'=:email, 'password'=:password, 'role_id'=:role_id WHERE id=:id");
                $update -> bindParam('login', $object->login);
                $update -> bindParam('email', $object->email);
                $update -> bindParam('password', $object->password);
                $update -> bindParam('role_Id', $object->roleId);
                $result = $update -> execute();
            break;
        }
        return $result;
    }
}
?>