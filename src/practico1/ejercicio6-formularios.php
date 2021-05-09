<?php

include_once "../const.php";
include_once "../includes/header.php";

?>

<div class="shadow mb-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= URL ?>">Inicio</a></li>
        <li class="breadcrumb-item"><a href="<?= URL ?>practico1">Practico 1</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ejercicio 6 - Formularios</li>
    </ol>
</div>

<div class="container mt-3">
    <h1 class="text-center">Ejercicio 6 - Formularios</h1>

    <div class="mt-3">
        <p class="h2">Letra</p>
        <ol type="a">
            <li>
                <p>
                    Hacer los ejercicios 1,3 y 5 con formularios HTML, solicitando al usuario que ingrese los datos
                    necesarios.

                </p>
            </li>
        </ol>

        <div class="mt-5">
            <h3>Solución</h3>

            <?php
              require 'formularios/formulario-ejercicio1.php';

              require 'formularios/formulario-ejercicio3.php';

              require 'formularios/formulario-ejercicio5.php';
            ?>

        </div>

    </div>
</div>
</div>

<?php
include_once "../includes/footer.php";
?>