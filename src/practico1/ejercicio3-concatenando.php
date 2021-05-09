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
    <h1 class="text-center">Ejercicio 3 - Concatenando cadenas</h1>

    <div class="mt-3">
        <p class="h2">Letra</p>
        <ol type="a">
            <li>
                <p>
                    Guardar en diferentes variables datos como Nombre, Edad, Teléfono, Dirección, Casilla de correo y
                    luego mostrarlas por pantalla creando una frase, concatenando el valor de la variable a lo que te
                    estas
                    refiriendo dentro de la frase. Ej.: “Mi nombre es Juan y tengo 17 años, vivo en Rivera 2514 esq.
                    Francisco Araúcho Montevideo Uruguay, mi teléfono de contacto es 097564123 y mi casilla de correo es
                    juan@prueba.com.uy”
                </p>
            </li>
            <li>
                <p>
                    Mostrar el texto en una capa HTML con un fondo de un color y la letra de otro, la capa debe borde.
                </p>
            </li>
        </ol>
        <p class="h1">Variables</p>
        <ul>
            <?php
                $name       = "Lucas";
                $age        = 18;
                $phone      = "098765432";
                $address    = "De La Puerta Pa' Dentro 4321 esq. Vereda, Canelones, Uruguay";
                $email      = "lucaspintos909@gmail.com";

                echo "<li> Nombre: "        . $name       ."</li>";
                echo "<li> Edad: "          . $age        . "</li>";
                echo "<li> Telefono: "      . $phone     . "</li>";
                echo "<li> Direccion: "     . $address    . "</li>";
                echo "<li> Correo: "        . $email       . "</li>";
            ?>
        </ul>

        <div class="mt-3">
            <div class=" mt-2 w-50 col">
                <p class="list-group-item text-color bg-color">
                    <?php
                      echo "Mi nombre es " . $name . " y tengo " .$age. " años, mi direccion es: " . $address . ", mi teléfono de contacto es " . $phone . " y mi casilla de correo es " . $email . ".";
                    ?>
                </p>
            </div>
        </div>


    </div>
</div>

<?php
include_once "../includes/footer.php";
?>