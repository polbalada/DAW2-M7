<?php

//afegir.php

//include('conexio_bd.php');
try {
    $cadena_conexio = 'mysql:dbname=books;host=127.0.0.1;port=3306';
    $usuari = 'root';
    $pswd = '';

    $db = new PDO($cadena_conexio, $usuari, $pswd);

    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $editorial = $_POST['editorial'];
    $numPag = null;

    if(isset($_POST['numPag'])){
        $numPag = $_POST['numPag'];
    }


    $sql="INSERT INTO `table_libros` (`id_libro`, `titulo`, `num_paginas`, `id_genero`, `id_editorial`) 
VALUES (NULL, '$titulo', '$numPag', '$genero', '$editorial');";
    $db->exec($sql);

    header('Location: '. '../index.php');

} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;