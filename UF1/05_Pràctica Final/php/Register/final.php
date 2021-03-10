<?php
    include '../Class/Alumne.php';
    session_start();

    //if(isset($_SESSION['alumnes'])){
    $alum=end($_SESSION['alumnes']);
    foreach($_POST as $x => $valor){
        $alum->afegirAssignatura($valor);
    }
    //}

    header('Location:../../index.htm');