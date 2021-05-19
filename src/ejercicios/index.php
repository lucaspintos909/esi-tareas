<!-- Para cambiar el title que viene en el header -->
<title>Ejercicios</title>
<?php
include_once '../const.php';

include_once '../includes/header.php';

$ejercicios = array(

    "Ingresando y Obteniendo datos de la BD"                             => "obteniendo_datos_bd.php",

);

?>



<div class="container mt-3">
    <h1>Ejercicios</h1>
    <div class="list-group mt-5 w-50 shadow-sm">

        <?php
        foreach ($ejercicios as $ejercicio => $ruta) {
            echo '<a href="' . URL_EJERCICIOS . $ruta . '" class="list-group-item list-group-item-action">' . $ejercicio . '</a>';
        }
        ?>
        
    </div>
</div>


<?php
include_once '../includes/footer.php';
?>