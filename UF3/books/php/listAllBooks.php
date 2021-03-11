<?php
$cadena_conexio = 'mysql:dbname=books;port=3306;host=127.0.0.1';
$usuari = 'root';
$pswd = '';
try {
    $db = new PDO($cadena_conexio, $usuari, $pswd);

    $sql = 'SELECT title, author, year, price FROM table_books';

    $llibres = $db->query($sql);

    echo "<table border=1px>";
    foreach ($llibres as $llibre){
        echo "<tr><td>" . $llibre['title'] . "</td><td>" . $llibre['author'] ."</td></tr>";
    }
    echo "</table>";
}catch (PDOException $e){
    echo "ERROR<br>";
    echo $e;
}