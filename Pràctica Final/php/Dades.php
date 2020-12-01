<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<form action="Matriculacio.php" method="POST">
    <?php
        session_start();
        $_SESSION['usuari']=$_POST['usuari'];
        $_SESSION['usuari']=$_POST['clau'];
    ;?>
    <fieldset>
        <legend>Dades:</legend>
        <input name="nom" type="text" placeholder="Nom" required/><br/>
        <input name="dataNaixement" type="date" placeholder="Data de Naixexment" required/><br/>
        <input name="correu" type="email" placeholder="Correu Electronic" required><br/>

        <input type="submit" value="Enviar"/><br/>
    </fieldset>
</form>
</body>
</html>
