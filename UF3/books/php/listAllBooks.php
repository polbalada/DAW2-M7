<?php
$cadena_conexio = 'mysql:dbname=Books;host=127.0.0.1:port=3306';
$usuari = 'root';
$pswd = '';
try {
    $db = new PDO($cadena_conexio, $usuari, $pswd);

    $sql = `SELECT title, author, year, price FROM books`;

    $llibres = $db->query($sql);

    echo "<table>";
    foreach ($llibres as $llibre){
        echo "<td><tr>" . $llibre['title'] . "</tr></td>";
    }
    echo "</table>";
}catch (PDOException $e){
    echo "ERROr";
}