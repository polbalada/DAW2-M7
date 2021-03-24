<?php

//afegir.php

include('conexio_bd.php');

$titulo=$_POST['titulo'];
$numPag=$_POST['numPag'];
$genero=$_POST['genero'];
$editorial=$_POST['editorial'];

$sql="INSERT INTO `table_libros` (`id_libro`, `titulo`, `num_paginas`, `id_genero`, `id_editorial`) 
VALUES (NULL, '$titulo', '$numPag', '$genero', '$editorial');";

if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
}
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);