<?php
$max=9;
$num=rand(1,$max);
echo "<table border=\"black\" style=\"width:50px\" align=\"center\" >
  <tr>
    <th style=\"padding: 50px;";
if ($num<=3)
    echo ' background-color:red;';
echo "\"></th>
  </tr>
  <tr>
    <th style=\"padding: 50px;";
if ($num>=4 and $num<=6)
    echo ' background-color:orange;';
echo"\"></th>
  </tr>
  <tr>
    <th style=\"padding: 50px;";
if ($num>=7)
    echo ' background-color:green;';
echo "\"></th>
  </tr>  
 </table>";