<?php
include_once "../const.php";
include_once "../includes/header.php";
?>

<div class="shadow mb-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= URL ?>">Inicio</a></li>
        <li class="breadcrumb-item"><a href="<?= URL ?>practico1">Practico 1</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ejercicio 4 - Recorriendo arrays</li>
    </ol>
</div>

<div class="container mt-3">
    <h1 class="text-center">Ejercicio 4 - Recorriendo arrays</h1>

    <div class="mt-3">
        <p class="h2">Letra</p>
        <ol type="a">
            <li>
                <p>
                    Guardar en un Array() un conjunto de países y mostrarlos en pantalla uno por fila recorriendo todo
                    el
                    array.
                </p>
            </li>
            <li>
                <p>
                    Mostrar el contenido del array en un control HTML Select, seleccionar “Uruguay” por defecto.
                </p>
            </li>
        </ol>
        
        <div class="d-flex">
           <div>
                <p class="h3">Variables</p>
                <ul>
                    <?php
                        $countries = array("Argentina", "Brasil", "Mexico", "Colombia", "Ecuador", "Uruguay", "Peru");

                        echo "<li> Paises: ";
                        echo "<ol>";
                        foreach ($countries as $country) {
                            echo "<li>". $country. "</li>";
                        }
                        echo "</ol></li>"
                    ?>
                </ul>
           </div>


            <div class="mt-5 ml-5">
                <div class="justify-content-md-center">
                    <div class=" mt-2 col">
                        <p class="list-group-item ">
                        <label for="countries">Selecciona un país:</label>
                            <select name="countries" id="countries">
                                <?php
                                    foreach($countries as $country){
                                        // Si es uruguay le añado la etiqueta selected='true', sino imprime la etiqueta normal
                                        echo $country == "Uruguay" ? "<option selected='true' value='" : "<option value='";
                                        echo $country . "'>" . $country . "</option>";
                                    }
                                ?>
                            </select>
                        </p>
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