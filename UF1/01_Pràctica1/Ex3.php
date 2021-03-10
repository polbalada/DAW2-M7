<?php
$l=10;
$i=$l;
while ($i>=0){
    $n=$l;
    while ($n>=0){
        if($n==0 or $n==$i or $i==$l) {
            echo '*';
        }elseif ($n<$i){
            echo '_';
        }else{
            echo ' ';
        }
        $n--;
    }
    echo "\n";
    $i--;
}