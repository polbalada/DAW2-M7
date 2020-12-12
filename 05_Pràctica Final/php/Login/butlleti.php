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
    $a[$i]->setNota($x);
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
