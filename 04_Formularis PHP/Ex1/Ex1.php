<?php
function trobar($array,$usuari) {
    $trobat=-1;
    $c=0;
    foreach ($array as $valor){
        if ($valor == $usuari){
            $trobat=$c;
            break;
        }
        $c++;
    }
    if($trobat==-1){
        echo "No s'ha trobat l'usuari";
        return -1;
    }else{
        return $trobat;
    }
}

function validar_passw($array,$array_passw,$usuari,$passw) {
    $pos=trobar($array,$usuari);
    if($pos!=-1){
        if ($array_passw[$pos]==$passw){
            echo "Benvingut $usuari";
        }else{
            echo "La contrasenya no es correcte";
        }
    }
}

$professors=array("prof1","prof2","prof3","prof4","prof5","prof6","prof7","prof8");
$professors_passw=array("prof1","prof2","prof3","prof4","prof5","prof6","prof7","prof8");

$alumnes=array("alum1","alum2","alum3","alum4","alum5","alum6","alum7","alum8");
$alumnes_passw=array("alum1","alum2","alum3","alum4","alum5","alum6","alum7","alum8");

$usuari=$_POST['usuari'];
$passw=$_POST['clau'];



if($_POST['ProfAlum']=='professor'){
    validar_passw($professors,$professors_passw,$usuari,$passw);
}else{
    validar_passw($alumnes,$alumnes_passw,$usuari,$passw);
}
