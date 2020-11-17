<?php
class Persona{
    public $nom;
    public $cognoms;
    public $data_neixament;
    public $correu_electronic;
    public $telefon;
    public $adreça_postal;
    public $dni;
    public $cicle;

    function __construct($nom, $cognoms, $data_neixament, $correu_electronic, $telefon, $adreça_postal, $dni, $cicle) {
        $this->nom = $nom;

    }

}