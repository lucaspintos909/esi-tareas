<div class="card mt-3">

    <!--CARD DEL Tercer EJERCICIO-->
    <div class="card-header">
        <h5 class="mb-0">
            Ejercicio 3 - Concatenando cadenas
        </h5>
    </div>

    <div class="card-body row">
        <div class="list-group mt-2 ml-3 col">

            <form class="w-50">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre"
                        required>
                </div>
                <div class="form-group">
                    <label for="age">Edad</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Ingrese sue edad"
                        required>
                </div>
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese sue correo"
                        required>
                </div>
                <div class="form-group">
                    <label for="phone">Telefono</label>
                    <input type="number" class="form-control" id="phone" name="phone"
                        placeholder="Ingrese su número de telefono" required>
                </div>
                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="text" class="form-control" id="address" name="address"
                        placeholder="Ingrese su dirección" required>
                </div>
                <input class="btn btn-primary" type="submit" value="Enviar">
            </form>

        </div>
        <div class="list-group mt-2 col ">

            <?php if(isset($_GET['name'], $_GET['age'], $_GET['email'],$_GET['phone'], $_GET['address'])){
                        
                $name = $_GET['name'];
                $age = $_GET['age'];
                $email = $_GET['email'];
                $phone = $_GET['phone'];
                $address = $_GET['address'];
            ?>

            <p class="list-group-item text-color bg-color">
                <?php
                    echo "Mi nombre es " . $name . " y tengo " .$age. " años, mi direccion es: " . $address . ", mi teléfono de contacto es " . $phone . " y mi casilla de correo es " . $email . ".";
                ?>
            </p>

            <?php }else{?>

            <p class="h4">Ingrese los datos y envie el formulario.</p>

            <?php }?>
        </div>
    </div>
</div>