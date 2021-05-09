<div class="card mt-3">

    <!--CARD DEL PRIMER EJERCICIO-->
    <div class="card-header">
        <h5 class="mb-0">
            Ejercicio 1 - Calculadora
        </h5>
    </div>

    <div class="card-body row">
        <div class="list-group mt-2 ml-3 col">

            <form class="w-50">
                <div class="form-group">
                    <label for="num1">Numero 1</label>
                    <input type="number" class="form-control" id="num1" name="num1" placeholder="Ingrese un número"
                        required>
                </div>
                <div class="form-group">
                    <label for="num2">Numero 2</label>
                    <input type="number" class="form-control" id="num2" name="num2" placeholder="Ingrese otro número"
                        required>
                </div>
                <input class="btn btn-primary" type="submit" value="Enviar">
            </form>

        </div>
        <div class="list-group mt-2 col ">

            <?php if(isset($_GET['num1'], $_GET['num2'])){
                        
                    $num1 = $_GET['num1'];
                    $num2 = $_GET['num2'];
                ?>

            <ul class="h5">
                <li>
                    <p>
                        <b>Suma</b>: <?=$num1?> + <?=$num2?> = <?=$num1 + $num2?>
                    </p>
                </li>
                <li>
                    <p>
                        <b>Resta</b>: <?=$num1?> - <?=$num2?> = <?=$num1 - $num2?>
                    </p>
                </li>
                <li>
                    <p>
                        <b>Multiplicacion</b>: <?=$num1?> x <?=$num2?> = <?=$num1 * $num2?>
                    </p>
                </li>
                <li>
                    <p>
                        <b>Division</b>: <?=$num1?> / <?=$num2?> = <?=number_format($num1 / $num2, 1);?>
                    </p>
                </li>
                <li>
                    <p><b>Son multiplos</b>: Si el resto de la division es 0.</p>
                    <p><?= $num1 . " % " . $num2 . " = " . ($num1 % $num2) . " entonces " . ($num1 % $num2 == 0 ? "son multiplos." : "no son multiplos.") ?>
                    </p>
                </li>
                <li>
                    <p>
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
                </li>

            </ul>

            <?php }else{?>

            <p class="h4">Ingrese los datos y envie el formulario.</p>

            <?php }?>
        </div>
    </div>
</div>