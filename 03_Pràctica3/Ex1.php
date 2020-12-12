<?php
if (empty($_GET["num1"]) or empty($_GET["num2"])) {
    echo "Error: un dels parametres no es correcte";
} else {
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    echo "$num1 + $num2 = " . ($num1+$num2);
}