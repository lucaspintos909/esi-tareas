<!-- Para cambiar el title que viene en el header -->
<title>Practico 1</title>
<?php
include_once '../const.php';

include_once '../includes/header.php';

$ejercicios = array(

    "Ejercicio 1 - Calculadora"                             => "ejercicio1-calculadora.php",
    "Ejercicio 2 - Notas"                                   => "ejercicio2-notas.php",
    "Ejercicio 3 - Concatenando"                            => "ejercicio3-concatenando.php",
    "Ejercicio 4 - Recorriendo Arrays"                      => "ejercicio4-recorriendo-arrays.php",
    "Ejercicio 5 - Recorriendo arrays multidimensionales"   => "ejercicio5-array-multidimensional.php",
    "Ejercicio 6 - Formularios"                             => "ejercicio6-formularios.php",

);

?>



<div class="container mt-3">
    <h1>Practico 1</h1>
    <h3 class="mt-5">Ejercicios</h3>
    <div class="list-group mt-3 w-50 shadow-sm">

        <?php
        foreach ($ejercicios as $ejercicio => $ruta) {
            echo '<a href="' . URL_PRACTICO1 . $ruta . '" class="list-group-item list-group-item-action">' . $ejercicio . '</a>';
        }
        ?>
        
    </div>
</div>


<?php
include_once '../includes/footer.php';
?>