<?php
$anio=2020;
if(!($anio % 4) && ($anio % 100 || !($anio % 400))) {
    print 'Es bisisesto';
}else{
    print 'No es bisiesto';
}
