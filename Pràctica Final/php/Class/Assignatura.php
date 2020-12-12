<?php
class Assignatura{
    public $nom;
    public $nota;

    /**
     * Assignatura constructor.
     * @param $nom
     * @param $nota
     */
    public function __construct($nom)
    {
        $this->nom = $nom;
        $this->nota = "NA";
    }

    /**
     * @param string $nota
     */
    public function setNota(string $nota): void
    {
        $this->nota = $nota;
    }


}