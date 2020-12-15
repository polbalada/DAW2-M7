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
        function validar($usuaris,$usuari,$passw) {
            $trobat=false;
            foreach ($usuaris as $dades){
                if ($dades->usuari == $usuari){
                    $trobat=true;
                    break;
                }
            }
            if(!$trobat){
                $_SESSION['error']="No s'ha trobat l'usuari";
                header('Location:login.php');
            }else{
                validar_passw($dades,$passw);
            }
        }

        function validar_passw($dades,$passw) {
            if($dades->clau == $passw){
                $_SESSION['userActiu']=$dades;
                mostar_pagina($dades);
            }else{
                $_SESSION['error']="La contrasenya no es correcte";
                header('Location:login.php');
            }
        }

        function mostar_pagina($dades){
            echo "
<div id='dades'>
    <li>Nom: $dades->nom</li>
    <li>Data de naixement: $dades->dataNaixement</li>
    <li>Correu: $dades->correu</li>
</div>
<div id='notes'>
    <form action='butlleti.php' method='POST'>";
            foreach ($dades->assigatures as $x){
                echo "$x->nom <input name='$x->nom' type='text' placeholder='Nota' required/><br/>";
            }
            echo "
        <input type='submit' value='Enviar'/><br/>
    </form>
</div>";
            //echo count($dades->assigatures);

        }

        session_start();
        if(isset($_SESSION['alumnes'])){
            $usuaris=[];
            foreach ($_SESSION['alumnes'] as $x){
                array_push($usuaris,$x);
            }

            //echo implode("<br>",$usuaris);

            $usuari = $_POST['usuari'];
            $clau = $_POST['clau'];
            validar($usuaris,$usuari,$clau);

        }
    ?>

</body>
</html>