<?php
include_once "../const.php";
include_once "../includes/header.php";
?>

<div class="shadow mb-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= URL ?>">Inicio</a></li>
        <li class="breadcrumb-item"><a href="<?= URL ?>practico1">Practico 1</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ejercicio 5 - Recorriendo arrays multidimensionales</li>
    </ol>
</div>

<div class="container mt-3">
    <h1 class="text-center">Ejercicio 5 - Recorriendo arrays multidimensionales</h1>

    <div class="mt-3">
        <p class="h2">Letra</p>
        <ol type="a">
            <li>
                <p>
                    Guardar en un array multidimensional los datos necesarios para crear el detalle de una factura, por
                    ejemplo: cantidad, descripción, precio unitario, subtotal y cargarlo con datos de prueba.
                </p>
            </li>
            <li>
                <p>
                    Mostrar por pantalla el contenido del array.
                </p>
            </li>
        </ol>

        <div class="d-flex">
            <div>
                <p class="h3">Solución</p>
                <ul>
                    <?php
                        $cantidad = rand(1,10);
                        $precio_unitario = rand(1000,2000);

                        $array = array (
                            "Factura" => array(
                                "Cantidad" => $cantidad,
                                "Descripcion" => "Factura Antel",
                                "Precio unitario" => $precio_unitario, // No supe a que se referia
                                "Sub total" => ($cantidad * $precio_unitario)
                            )
                          );
                        
                        foreach($array as $item => $detalles){
                            echo "<li> $item: ";
                            echo "<ol>";
                            foreach($detalles as $indice => $valor)
                            {
                                echo "<li> $indice: $valor </li>";
                            }
                        }
                        
                        echo "</ol></li>";
                    ?>
                </ul>
            </div>
        </div>

    </div>
</div>
</div>

<?php
include_once "../includes/footer.php";
?>