<?php
include_once "../const.php";
include_once "../includes/header.php";
?>

<div class="shadow mb-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= URL ?>">Inicio</a></li>
        <li class="breadcrumb-item"><a href="<?= URL ?>practico1">Practico 1</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ejercicio 2 - Notas</li>
    </ol>
</div>

<div class="container mt-3">
    <h1 class="text-center">Ejercicio 2 - Notas</h1>

    <div class="mt-3">
        <p class="h2">Letra</p>
        <ol type="a">
            <li>
                <p>
                    Declarar una variable “nota” con un valor entre 1 y 10 y mostrar por pantalla el nivel
                    correspondiente,
                    sabiendo que los intervalos son: 1 a 5 es Insuficiente, 6 a 9 es Suficiente, 10 y 11 Muy Bueno y 12
                    Excelente.
                </p>
            </li>
            <li>
                <p>
                    Mostrar la nota ingresada por su nombre. Ejemplo: “uno, dos, tres, ...”

                </p>
            </li>
        </ol>
        <p class="h1">Variables</p>
        <ul>
            <?php
                $nota = rand(1,12);

                echo "<li> Valor de nota: " . $nota . "</li>";
            ?>
        </ul>


        <div class="mt-3">
            <div class="justify-content-md-center">
                <div class=" mt-2 w-25 col">
                    <p class="list-group-item ">
                        La nota es:
                        <?php
                                switch ($nota) {
                                    case 1:
                                        echo "uno";
                                        break;
                                    case 2:
                                        echo "dos";
                                        break;
                                    case 3:
                                        echo "tres";
                                        break;
                                    case 4:
                                        echo "cuatro";
                                        break;
                                    case 5:
                                        echo "cinco";
                                        break;
                                    case 6:
                                        echo "seis";
                                        break;
                                    case 7:
                                        echo "siete";
                                        break;
                                    case 8:
                                        echo "ocho";
                                        break;
                                    case 9:
                                        echo "nueve";
                                        break;
                                    case 10:
                                        echo "diez";
                                        break;
                                    case 11:
                                        echo "once";
                                        break;
                                    case 12:
                                        echo "doce";
                                        break;
                                }
                            ?>
                        <br>
                        Nivel:
                        <?php
                                if($nota <= 5){
                                    echo " Insuficiente";
                                }elseif ($nota >= 6 && $nota <= 9) {
                                    echo " Suficiente";
                                }elseif ($nota >= 10 && $nota <= 11) {
                                    echo " Muy bueno";
                                }elseif ($nota == 12) {
                                    echo " Excelente";
                                }
                            ?>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<?php
include_once "../includes/footer.php";
?>