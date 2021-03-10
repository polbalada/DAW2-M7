<?php
if (empty($_GET["numerador"]) or empty($_GET["divisor"])) {
    echo "Error: un dels parametres no es correcte";
} else {
    $numerador=$_GET["numerador"];
    $divisor=$_GET["divisor"];
    if(!($divisor==0) and is_numeric($numerador) and is_numeric($divisor)){
        echo "El resultat de $numerador / $divisor es " . $numerador/$divisor;
    }
}