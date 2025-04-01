<!-- Para poder usar bootstrap y css -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatus del formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
</html>

<?php

    echo "<h1>Estatus del formulario</h1>";

    if(isset($_POST['nombre']) && isset($_POST['edad']) && isset($_POST['correo'])){
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $correo = $_POST['correo'];
        //Para validar que no este vacio
        if(!empty($nombre) && !empty($edad) && !empty($correo)){
            //Para validar que el correo tenga un arroba
            if(substr_count($correo, '@') == 1){
                //Para validar que el nombre sea mayor a 2 caracteres y menor a 50 caracteres
                if(strlen($nombre) > 2 && strlen($nombre) < 50){
                    //Para validad que hayan ingresado solamente números a la edad y que sea entre 1 y 210 años
                    if(is_numeric($edad) && $edad >= 1 && $edad <= 120){
                        echo "<p>Gracias por enviar el formulario, $nombre, de $edad años de edad.<br>Nos pondremos en contacto contigo a la brevedad mediante tu correo: $correo</p><br>";
                    } else{
                        echo "<p>La edad debe de ser un número y debe de ser entre 1 y 120 años.</p><br>";
                    }
                } else{
                    echo "<p>Nombre invalido. El nombre debe de contener por lo menos 2 letras y tampoco debe de superar las 50 letras.</p><br>";
                }
            } else{
                echo "<p>El correo debe de tener un @.</p><br>";
            }
        //En caso de estar vacio alguno de los campos se indica
        } else if (empty($nombre)){
            echo "<p>¡Alerta! No dejes el campo nombre vacio.</p><br>";
        } else if (empty($edad)){
            echo "<p>¡Alerta! No dejes el campo edad vacio.</p><br>";
        } else if (empty($correo)){
            echo "<p>¡Alerta! No dejes el campo correo vacio.</p><br>";
        } else{
            echo "<p>¡Alerta! No dejes campos vacios.</p><br>";
        }
    }

?>

    <a href="index.html" class="btn btn-primary mx-2">
        Volver al formulario
    </a>