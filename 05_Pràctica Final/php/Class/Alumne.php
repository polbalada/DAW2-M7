<?php
include 'Assignatura.php';
class Alumne {
    public $usuari;
    public $clau;
    public $nom;
    public $dataNaixement;
    public $correu;

    public $assigatures = [];

    /**
     * Alumne constructor.
     * @param $usuari
     * @param $clau
     * @param $nom
     * @param $dataNaixement
     * @param $correu
     */
    public function __construct($usuari, $clau, $nom, $dataNaixement, $correu)
    {
        $this->usuari = $usuari;
        $this->clau = $clau;
        $this->nom = $nom;
        $this->dataNaixement = $dataNaixement;
        $this->correu = $correu;
    }

    public function __toString()
    {
        return "Usuari: $this->usuari, Clau: $this->clau, Nom: $this->nom, Data de Naixement: $this->dataNaixement, Correu: $this->correu";
    }

    public function afegirAssignatura($assignatura){
        array_push($this->assigatures,$assignatura);
    }


}
