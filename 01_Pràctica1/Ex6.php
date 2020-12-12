<?php
$frutas = array("Albaricoque","Cereza","Ciruela","Higo","Kaki","Manzana","Melocotón","Nectarina","Níspero","Pera","Uva");
echo '<ul>';
foreach ($frutas as $i){
    echo "<li>$i</li>";
}
echo '</ul>';

echo '<ol>';
for ($i=10;$i>0;$i--){
    echo "<li>$frutas[$i]</li>";
}
echo '</ol>';

shuffle($frutas);
echo '<ul>';
foreach ($frutas as $i){
    echo "<li>$i</li>";
}
echo '</ul>';
