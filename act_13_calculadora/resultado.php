<!-- Para poder usar bootstrap y css -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
</html>

<?php



    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operacion = $_POST['operacion'];

    echo "<h1>Resultado de la operación</h1>";


    if($operacion == 1){
        echo "<p>El resultado de la suma de $n1 y $n2 es: ", $n1 + $n2, ".</p>";
    } else if($operacion == 2){
        echo "<p>El resultado de la resta de $n1 y $n2 es: ", $n1 - $n2, ".</p>";
    } else if($operacion == 3){
        echo "<p>El resultado de la multiplicación de $n1 y $n2 es: ", $n1 * $n2, ".</p>";
    } else if($operacion == 4){
        if($n2 == 0){
            echo "<p>No se puede dividir entre 0. Ingresa un número valido.</p>";
        } else{
            echo "<p>El resultado de la suma de $n1 y $n2 es: ", $n1 / $n2, ".</p>";
        }
    }

?>

    <a href="index.html" class="btn btn-primary mx-2">
        Hacer otra operación
    </a>