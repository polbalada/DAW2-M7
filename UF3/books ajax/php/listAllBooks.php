<?php
$cadena_conexio = 'mysql:dbname=books;port=3306;host=127.0.0.1';
$usuari = 'root';
$pswd = '';
try {
    $db = new PDO($cadena_conexio, $usuari, $pswd);

    $sql = 'SELECT titulo, table_genero.nombre AS genero, table_editorial.nombre AS editorial
FROM table_libros
INNER JOIN table_genero ON table_libros.id_genero=table_genero.id_genero
INNER JOIN table_editorial ON table_libros.id_editorial=table_editorial.id_editorial;';

    $llibres = $db->query($sql);

    $taula="";

    $taula = $taula . "<table id='llibres'>";
    $taula = $taula . "<tr><th>titulo</th><th>genero</th><th>editorial</th></tr>";
    foreach ($llibres as $llibre){
        $taula = $taula .  "<tr><td>" . $llibre['titulo'] . "</td><td>" . $llibre['genero'] ."</td><td>" . $llibre['editorial'] . "</td></tr>";
    }
    $taula = $taula . "</table>";
}catch (PDOException $e){
    echo "ERROR<br>";
    echo $e;
}
//echo $taula;
echo json_encode($taula);