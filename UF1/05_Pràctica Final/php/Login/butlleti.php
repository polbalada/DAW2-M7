<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<?php
include '../Class/Alumne.php';
session_start();
$dades=$_SESSION['userActiu'];
echo"
<div id='dades'>
    <li>Nom: $dades->nom</li>
    <li>Data de naixement: $dades->dataNaixement</li>
    <li>Correu: $dades->correu</li>
</div>";

$a = $dades->assigatures;
/*print_r($a);
echo "<br>";
*/
$i=0;

foreach ($_POST as $x){
    $a[array_keys($_POST)[$i]]->setNota($x);
    $i++;
}

//print_r($a);
echo "
<table>
    <tr>
        <th>Assignatura</th>
        <th>Nota</th>
    </tr>";
foreach ($a as $x){
    echo "
    <tr>
        <td>$x->nom</td>
        <td>$x->nota</td>
    </tr>
";
}

echo "</table>";

?>
</body>
</html>
