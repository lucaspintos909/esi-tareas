<div class="card mt-3">

                <!--CARD DEL Quinto EJERCICIO-->
                <div class="card-header">
                    <h5 class="mb-0">
                        Ejercicio 5 - Arrays multidimensionales
                    </h5>
                </div>

                <div class="card-body row">
                    <div class="list-group mt-2 ml-3 col">

                        <form class="w-50">
                            <div class="form-group">
                                <label for="quantity">Cantidad</label>
                                <input type="number" class="form-control" id="quantity" name="quantity"
                                    placeholder="Ingrese la cantidad" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <input type="text" class="form-control" id="description" name="description"
                                    placeholder="Ingrese una descripción" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Precio unitario</label>
                                <input type="number" class="form-control" id="price" name="price"
                                    placeholder="Ingrese precio unitario" required>
                            </div>
                            <div class="form-group">
                                <label for="sub_total">Sub Total</label>
                                <input type="number" class="form-control" id="sub_total" name="sub_total"
                                    placeholder="Ingrese el subtotal" required>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Enviar">
                        </form>

                    </div>
                    <div class="list-group mt-2 col h5">

                        <?php if(isset($_GET['quantity'], $_GET['description'], $_GET['price'],$_GET['sub_total'])){
                        
                            $quantity = $_GET['quantity'];
                            $description = $_GET['description'];
                            $price = $_GET['price'];
                            $sub_total = $_GET['sub_total'];
                        

                            $array = array (
                                "Factura" => array(
                                    "Cantidad" => $quantity,
                                    "Descripcion" => $description,
                                    "Precio unitario" => $price, // No supe a que se referia
                                    "Sub total" => $sub_total
                                )
                              );
                            
                            foreach($array as $item => $detalles){
                                echo "<li> $item:";
                                echo "<ol>";
                                foreach($detalles as $indice => $valor)
                                {
                                    echo "<li> $indice: $valor </li>";
                                }
                            }
                            
                            echo "</ol></li>";
                        }else{?>

                        <p class="h4">Ingrese los datos y envie el formulario.</p>

                        <?php }?>
                    </div>
                </div>
            </div>