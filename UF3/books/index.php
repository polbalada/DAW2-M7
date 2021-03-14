<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Llibres</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Llibres</h1>
    <form method="post" id="afegir" action="php/afegir.php">
        <fieldset>
            <legend>Afegir llibre:</legend>
            <input type="text" name="titulo" placeholder="Titulo" required>
            <input type="number" name="numPag" placeholder="Numero de pagines">
            <select name="genero" required>
                <option disabled selected>Selecciona una opció</option>
                <option value="1">Novela romantica</option>
                <option value="2">Ficcio</option>
                <option value="3">Poesia</option>
                <option value="4">Policiaca</option>
                <option value="5">Informàtica</option>
            </select>
            <select name="editorial" required>
                <option disabled selected>Selecciona una opció</option>
                <option value="1">L'Altra</option>
                <option value="2">Sintesis</option>
                <option value="3">Ra-ma</option>
                <option value="4">Barco de Vapor</option>
                <option value="5">McGraw Hill</option>
            </select>
            <button type="submit">Afegir</button>
        </fieldset>
    </form>
    <?php
    include_once ("./php/listAllBooks.php");
    ?>
</body>
<script>
    /*$(document).on('submit', '#to_do_form', function(event){
        event.preventDefault();

        if($('#task_name').val() == '')
        {
            $('#message').html('<div class="alert alert-danger">Enter Task Details</div>');
            return false;
        }
        else
        {
            $('#submit').attr('disabled', 'disabled');
            $.ajax({
                url:"add_task.php",
                method:"POST",
                data:$(this).serialize(),
                success:function(data)
                {
                    $('#submit').attr('disabled', false);
                    $('#afegir')[0].reset();
                    $('.list-group').prepend(data);
                }
            })
        }
    });*/
</script>
</html>