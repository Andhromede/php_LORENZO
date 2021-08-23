<?php

class Horaires
{
    public $jour;
    public $heureAM;
    public $heurePM;
    public $ouverture;


    public function __construct(string $day, string $hourAM, string $hourPM, bool $open)
    {
        $this->jour = $day;
        $this->heureAM = $hourAM;
        $this->heurePM = $hourPM;
        $this->ouverture = $open;

    }






}

?>