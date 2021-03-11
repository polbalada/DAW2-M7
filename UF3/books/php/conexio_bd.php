<?php
$cadena_conexio = 'mysql:dbname=books;host=127.0.0.1:port=3306';
$usuari = 'root';
$pswd = '';

$db = new PDO($cadena_conexio, $usuari, $pswd);