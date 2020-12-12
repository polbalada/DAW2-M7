<?php
echo '<table border="black" style="width:50px" align="center" >';
for ($i=0;$i<8;$i++){
    echo '<tr>';
    for($n=0;$n<8;$n++){
        echo '<th style="padding: 30px;';
        if (!(($i%2==0 and $n%2==0)or($i%2!=0 and $n%2!=0))){
            echo ' background-color:black;';
        }
        echo '"> </th>';
    }
    echo '</tr>';
}
echo '</table>';