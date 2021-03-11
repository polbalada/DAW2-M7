<?php
$cadena_conexio = 'mysql:dbname=books;port=3306;host=127.0.0.1';
$usuari = 'root';
$pswd = '';
try {
    $db = new PDO($cadena_conexio, $usuari, $pswd);

    $sql = `SELECT title, author, year, price FROM books`;

    $llibres = $db->query($sql);
    print_r($llibres);

    echo "<table>";
    /*foreach ($llibres as $llibre){
        echo "<td><tr>" . $llibre['title'] . "</tr></td>";
    }*/
    echo "</table>";
}catch (PDOException $e){
    echo $e;
    echo "ERROR";
}