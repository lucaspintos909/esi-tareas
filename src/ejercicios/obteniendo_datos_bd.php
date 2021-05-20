<title>Obteniendo Datos Bd</title>
<?php
include_once '../const.php';
include_once '../includes/header.php';
include_once '../database.php';

$db = new Database();

$db->connect();

$contacts = $db->query("SELECT * FROM contacts");
?>

<div class="shadow mb-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= URL ?>">Inicio</a></li>
        <li class="breadcrumb-item"><a href="<?= URL_EJERCICIOS ?>">Ejercicios</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ingresando y obteniendo datos de la BD</li>
    </ol>
</div>

<div class="container">

    <div class="mt-5 d-flex justify-content-between align-items-center">

        <h1>Contactos</h1>

        <button onclick="showModal()" type="button" class="btn btn-success">Agregar Contacto</button>

    </div>

    <div class="mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Telefono</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($contacts as $contact) { ?>
                    <tr>

                        <th scope='row'> <?= $contact['phone'] ?> </th>
                        <td> <?= $contact['name'] ?> </td>
                        <td> <?= $contact['last_name'] ?> </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>

<div id="addContactModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Contacto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= URL_EJERCICIOS ?>agregar_contacto.php" method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="phone">Telefono</label>
                        <input id="phone" type="number" name="phone" class="form-control" placeholder="Ej. 098765432" required>
                    </div>


                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input id="name" type="text" name="name" class="form-control" placeholder="Escriba el nombre aquí" required>
                    </div>

                    <div class="form-group ">
                        <label for="last_name">Apellido</label>
                        <input id="last_name" name="last_name" class="form-control" placeholder="Escriba el apellido aquí" required>
                    </div>


                </div>
                <div class="modal-footer">
                    <input class="btn btn-primary w-10" type="submit" name="save_contact" value="Guardar">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
if (isset($_GET['message'])) { ?>

    <div class="alert-fixed">
        <div class="alert alert-danger alert-dismissible fade show fixed-bottom alert-fit-content" role="alert">
            <?= $_GET['message'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

<?php } ?>

<?php
include_once '../includes/footer.php';
?>