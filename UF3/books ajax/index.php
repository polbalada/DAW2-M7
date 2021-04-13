<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Llibres</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--https://www.studentstutorial.com/ajax/insert-data-->
</head>
<body>
    <h1>Llibres</h1>
    <form method="post" id="afegir" name="form">
        <fieldset>
            <legend>Afegir llibre:</legend>
            <input type="text" name="titulo" id="titulo" placeholder="Titulo" required>
            <input type="number" name="numPag" id="numPag" placeholder="Numero de pagines">
            <select name="genero" id="genero" required>
                <option disabled selected>Selecciona una opció</option>
                <option value="1">Novela romantica</option>
                <option value="2">Ficcio</option>
                <option value="3">Poesia</option>
                <option value="4">Policiaca</option>
                <option value="5">Informàtica</option>
            </select>
            <select name="editorial" id="editorial" required>
                <option disabled selected>Selecciona una opció</option>
                <option value="1">L'Altra</option>
                <option value="2">Sintesis</option>
                <option value="3">Ra-ma</option>
                <option value="4">Barco de Vapor</option>
                <option value="5">McGraw Hill</option>
            </select>
            <input type="button" name="submit" id="submit" value="Afegir">
        </fieldset>
    </form>
    <table id="llibres" border=1px></table>
</body>
<script>
    $.ajax({
        url: 'php/listAllBooks.php',
        method: "GET",
        dataType: 'json',
        success: function(response) {
            $('#llibres').html(response);
        }
    });
    $(document).ready(function() {
        $('#submit').on('click', function() {
            $("#submit").attr("disabled", "disabled");
            var titulo = $('#titulo').val();
            var numPag = $('#numPag').val();
            var genero = $('#genero').val();
            var editorial = $('#editorial').val();
            if(titulo!="" && genero!="" && editorial!=""){
                $.ajax({
                    url: "php/afegir.php",
                    type: "POST",
                    data: {
                        titulo: titulo,
                        numPag: numPag,
                        genero: genero,
                        editorial: editorial
                    },
                    cache: false,
                    success: function(dataResult){
                        var dataResult = JSON.parse(dataResult);
                        if(dataResult.statusCode==200){
                            $("#submit").removeAttr("disabled");
                            $('#afegir')[0].reset();
                            $("#success").show();
                            $('#success').html('Data added successfully !');
                        }
                        else if(dataResult.statusCode==201){
                            alert("Error occured !");
                        }

                    }
                });

                $.ajax({
                    url: 'php/listAllBooks.php',
                    method: "GET",
                    dataType: 'json',
                    success: function(response) {
                        $('#llibres').html(response);
                    }
                });
            }
            else{
                alert('Please fill all the field !');
            }
        });
    });
</script>
</html>