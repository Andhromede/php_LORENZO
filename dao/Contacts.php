<?php
/**
 * 
 *
 */
class Contacts
{
    public $nom;
    public $adresse;
    public $telephone;
    public $email;

/**
 * 
 */
    public function __construct(string $name, string $adresse, string $phone, string $mail)
    {
        $this->nom = $name;
        $this->adresse = $adresse;
        $this->telephone = $phone;
        $this->email = $mail;

    }

}

?>