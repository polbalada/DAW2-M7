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
        $this->nota="NA";
    }

    /**
     * @param string $nota
     */
    public function setNota($nota)
    {
        $this->nota = $nota;
    }

    public function __toString()
    {
        return "Nom: $this->nom Nota: $this->nota";
    }


}