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
        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
        <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
    </div>
</div>


<?php
include_once '../includes/footer.php';
?>