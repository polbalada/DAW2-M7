<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dades</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['error'])){
            echo "<p id='error'>" . $_SESSION['error'] . "</p>";
            $_SESSION['error']="";
        }
    ;?>
    <form action="notes.php" method="POST">
        <fieldset>
            <legend>Login:</legend>
            <input name="usuari" type="text" required/><br/>
            <input name="clau" type="password" required/><br/>

            <input type="submit" value="submit"/><br/>
        </fieldset>
    </form>
</body>
</html>
