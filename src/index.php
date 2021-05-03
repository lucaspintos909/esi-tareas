<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
</head>
<body>

<?php

    $personas = array(
        "Persona1" => "Lucas",
        "Persona2" => "Juan",
        "Persona3" => "Mateo"
    );
    unset($personas["Persona1"]);
    foreach ($personas as $key => $persona){
        echo $key . " -> " . $persona;
        echo "<br>";
    }
    echo "<br>";

    echo "Pruebas Lucxas Pintos";

?>

</body>
</html>