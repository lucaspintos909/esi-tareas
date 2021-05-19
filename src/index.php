<?php
include_once './const.php';
include_once 'includes/header.php';
?>

<div class="container mt-5">
    <div class="card text-center">
        <div class="card-header d-flex">
            Fecha : 18/5/2021
        </div>
        <div class="card-body">
            <h5 class="card-title">Ejercicio</h5>
            <p class="card-text">Ingresando y obteniendo datos de la BD.<br>
            </p>
            <a href="<?= URL_EJERCICIOS ?>obteniendo_datos_bd.php" class="btn btn-primary">Ver ejercicio</a>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="card text-center">
        <div class="card-header d-flex">
            Fecha : 8/5/2021
        </div>
        <div class="card-body">
            <h5 class="card-title">Práctico 1 - Programación Web</h5>
            <p class="card-text">Variables, estructuras y formularios.<br>
                Ejercicios del 1 al 6 terminados.<br>
                <a href="https://pias.uy/publicpias/category/programacionweb/practicos-prog-web/">Link del practico</a>
            </p>
            <a href="<?= URL_PRACTICO1 ?>" class="btn btn-primary">Ver ejercicios</a>
        </div>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>