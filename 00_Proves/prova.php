<?php
if( empty($_GET["nombre"])) {
    echo "Error: no hi ha el nom";
} else {
    echo "Correcte: Hola ". $_GET["nombre"];
}