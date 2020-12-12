<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Matriculació</title>
</head>
<body>
<form action="final.php" method="POST">
    <?php
        include '../Class/Alumne.php';
        session_start();

        $_SESSION['nom']= $_POST['nom'];
        $_SESSION['dataNaixement']= $_POST['dataNaixement'];
        $_SESSION['correu']= $_POST['correu'];
        $a = new Alumne($_SESSION['usuari'],$_SESSION['clau'],$_SESSION['nom'],$_SESSION['dataNaixement'],$_SESSION['correu']);

        if (!isset($_SESSION['alumnes'])){
            $_SESSION['alumnes'] = [];
        }
        array_push($_SESSION['alumnes'],$a);
        $prova= $_SESSION['alumnes'];
        foreach ($prova as $u){
            echo $u . "<br>";
        }
        
    ?>
    <fieldset>
        <legend>Assignatures:</legend>
            <fieldset>
                <legend>M01</legend>
                <input type="checkbox" id="M01_UF1" name="M01_UF1" value="M01_UF1">
                <label for="M01_UF1"> M01_UF1</label><br>
                <input type="checkbox" id="M01_UF2" name="M01_UF2" value="M01_UF2">
                <label for="M01_UF2"> M01_UF2</label><br>
                <input type="checkbox" id="M01_UF3" name="M01_UF3" value="M01_UF3">
                <label for="M01_UF3"> M01_UF3</label><br>
                <input type="checkbox" id="M01_UF4" name="M01_UF4" value="M01_UF4">
                <label for="M01_UF4"> M01_UF4</label><br>
            </fieldset>
            <fieldset>
                <legend>M02</legend>
                <input type="checkbox" id="M02_UF1" name="M02_UF1" value="M02_UF1">
                <label for="M02_UF1"> M02_UF1</label><br>
                <input type="checkbox" id="M02_UF2" name="M02_UF2" value="M02_UF2">
                <label for="M02_UF2"> M02_UF2</label><br>
                <input type="checkbox" id="M02_UF3" name="M02_UF3" value="M02_UF3">
                <label for="M02_UF3"> M02_UF3</label><br>
                <input type="checkbox" id="M02_UF4" name="M02_UF4" value="M02_UF4">
                <label for="M02_UF4"> M02_UF4</label><br>
            </fieldset>
            <fieldset>
                <legend>M03</legend>
                <input type="checkbox" id="M03_UF1" name="M03_UF1" value="M03_UF1">
                <label for="M03_UF1"> M03_UF1</label><br>
                <input type="checkbox" id="M03_UF2" name="M03_UF2" value="M03_UF2">
                <label for="M03_UF2"> M03_UF2</label><br>
                <input type="checkbox" id="M03_UF3" name="M03_UF3" value="M03_UF3">
                <label for="M03_UF3"> M03_UF3</label><br>
                <input type="checkbox" id="M03_UF4" name="M03_UF4" value="M03_UF4">
                <label for="M03_UF4"> M03_UF4</label><br>
            </fieldset>
            <fieldset>
                <legend>M04</legend>
                <input type="checkbox" id="M04_UF1" name="M04_UF1" value="M04_UF1">
                <label for="M04_UF1"> M04_UF1</label><br>
                <input type="checkbox" id="M04_UF2" name="M04_UF2" value="M04_UF2">
                <label for="M04_UF2"> M04_UF2</label><br>
                <input type="checkbox" id="M04_UF3" name="M04_UF3" value="M04_UF3">
                <label for="M04_UF3"> M04_UF3</label><br>
                <input type="checkbox" id="M04_UF4" name="M04_UF4" value="M04_UF4">
                <label for="M04_UF4"> M04_UF4</label><br>
            </fieldset>
            <fieldset>
                <legend>M05</legend>
                <input type="checkbox" id="M05_UF1" name="M05_UF1" value="M05_UF1">
                <label for="M05_UF1"> M05_UF1</label><br>
                <input type="checkbox" id="M05_UF2" name="M05_UF2" value="M05_UF2">
                <label for="M05_UF2"> M05_UF2</label><br>
                <input type="checkbox" id="M05_UF3" name="M05_UF3" value="M05_UF3">
                <label for="M05_UF3"> M05_UF3</label><br>
                <input type="checkbox" id="M05_UF4" name="M05_UF4" value="M05_UF4">
                <label for="M05_UF4"> M05_UF4</label><br>
            </fieldset>
            <fieldset>
                <legend>M06</legend>
                <input type="checkbox" id="M06_UF1" name="M06_UF1" value="M06_UF1">
                <label for="M06_UF1"> M06_UF1</label><br>
                <input type="checkbox" id="M06_UF2" name="M06_UF2" value="M06_UF2">
                <label for="M06_UF2"> M06_UF2</label><br>
                <input type="checkbox" id="M06_UF3" name="M06_UF3" value="M06_UF3">
                <label for="M06_UF3"> M06_UF3</label><br>
                <input type="checkbox" id="M06_UF4" name="M06_UF4" value="M06_UF4">
                <label for="M06_UF4"> M06_UF4</label><br>
            </fieldset>
        <input type="submit" value="Enviar"/><br/>
    </fieldset>
</form>
</body>
</html>
