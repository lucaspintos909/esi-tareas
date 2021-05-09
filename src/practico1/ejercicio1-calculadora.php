<?php
include_once "../const.php";
include_once "../includes/header.php";
?>
    <div class="shadow mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL ?>">Inicio</a></li>
            <li class="breadcrumb-item"><a href="<?= URL ?>practico1">Practico 1</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ejercicio 1 - Calculadora</li>
        </ol>
    </div>

    <div class="container mt-3">
        <h1 class="text-center">Ejercicio 1 - Calculadora</h1>

        <div class="mt-3">
            <p class="h2">Letra</p>
            <ol type="a">
                <li>
                    <p>
                        Utilizando solo PHP realiza una sencilla calculadora. Setea un par de variables con diferentes números y
                        muestra en pantalla el resultado de las operaciones básicas (Suma, Resta, Multiplicación y División),
                        separando el resultado en diferentes filas de la página.
                    </p>
                </li>
                <li>
                    <p>
                        Mostrar por pantalla si el primer número es múltiplo del segundo.
                    </p>
                </li>
                <li>
                    <p>
                        Mostrar por pantalla cual es el mayor, el menor y si son iguales.
                    </p>
                </li>
            </ol>
            <p class="h1">Variables</p>
            <ul>
                <?php
                $num1 = rand(1,20);
                $num2 = rand(1,20);

                echo "<li> Valor 1: " . $num1 . "</li>";
                echo "<li> Valor 2: " . $num2 . "</li>";
                ?>
            </ul>


            <div class="mt-3">
                <div class="accordion" id="accordionExample">
                    <div class="card">

                        <!--CARD DEL PRIMER EJERCICIO-->
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-controls="collapseOne">
                                    a. Operaciones básicas
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                            <div class="card-body row justify-content-md-center">
                                <div class="list-group mt-2 w-25 shadow-sm col">
                                    <p class="list-group-item ">
                                        <b>Suma</b>: <?=$num1?> + <?=$num2?> = <?=$num1 + $num2?>

                                    </p>
                                </div>
                                <div class="list-group mt-2 w-25 shadow-sm col">
                                    <p class="list-group-item">
                                        <b>Resta</b>: <?=$num1?> - <?=$num2?> = <?=$num1 - $num2?>

                                    </p>
                                </div>
                                <div class="list-group mt-2 w-25 shadow-sm col">
                                    <p class="list-group-item">
                                        <b>Multiplicacion</b>: <?=$num1?> x <?=$num2?> = <?=$num1 * $num2?>

                                    </p>
                                </div>
                                <div class="list-group mt-2 w-25 shadow-sm col">
                                    <p class="list-group-item">
                                        <b>Division</b>: <?=$num1?> / <?=$num2?> = <?=number_format($num1 / $num2, 1);?>

                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--CARD DEL SEGUNDO EJERCICIO-->

                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-controls="collapseTwo">
                                    b. Ver si el primer número es múltiplo del segundo.
                                </button>
                            </h5>
                        </div>

                        <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                            <div class="card-body row justify-content-md-center">
                                <div class="list-group mt-2 w-25 shadow-sm col">
                                    <p class="list-group-item ">
                                        <?php
                                        echo "Si el resto de la division es 0 entonces es multiplo. <br>";

                                        echo "<br>";

                                        echo $num1 . " % " . $num2 . " = " . ($num1 % $num2) . " entonces " . ($num1 % $num2 == 0 ? "son multiplos" : "no son multiplos");

                                        ?>

                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--CARD DEL TERCER EJERCICIO-->

                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-controls="collapseThree">
                                    c. Cual es el mayor, el menor y si son iguales.
                                </button>
                            </h5>
                        </div>

                        <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                            <div class="card-body row justify-content-md-center">
                                <div class="list-group mt-2 w-25 shadow-sm col">
                                    <p class="list-group-item">
                                        <?php
                                            echo $num1 . " y " . $num2;
                                            echo $num1 == $num2 ?  " son iguales." : " no son iguales.";

                                            echo "<br>";

                                            if($num1 > $num2){
                                                echo $num1 . " es mas grande que " . $num2 . ".";
                                            }elseif ($num2 > $num1){
                                                echo $num2 . " es mas grande que " . $num1 . ".";
                                            }
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include_once "../includes/footer.php";
?>