<!-- Para cambiar el title que viene en el header -->
<title>Practico 1</title>
<?php
include_once '../const.php';

include_once '../includes/header.php';
?>

<div class="container mt-3">
    <h1>Ejercicios</h1>
    <div class="list-group mt-3 w-50 shadow-sm">
        <a href="<?=URL?>practico1/ejercicio1-calculadora.php" class="list-group-item list-group-item-action">Ejericio 1 - Calculadora</a>
        <a href="<?=URL?>practico1/ejercicio2-notas.php" class="list-group-item list-group-item-action">Ejericio 2 - Notas</a>
        <a href="<?=URL?>practico1/ejercicio3-concatenando.php" class="list-group-item list-group-item-action">Ejercicio 3 - Concatenando</a>
        <a href="<?=URL?>practico1/ejercicio4-recorriendo-arrays.php" class="list-group-item list-group-item-action">Ejercicio 4 - Recorriendo Arrays</a>
        <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
    </div>
</div>


<?php
include_once '../includes/footer.php';
?>