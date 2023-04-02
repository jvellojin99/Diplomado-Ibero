<?php include 'template/header.php' ?>

<?php
include_once "model/conexion.php";
$sql = $bd->query("select * from usuario");
$users = $sql->fetchAll(PDO::FETCH_OBJ);
//print_r($persona);
?>


<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- inicio alerta -->
            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Rellena todos los campos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>


            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Registrado!</strong> Se agregaron los datos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>



            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Vuelve a intentar.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>



            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Cambiado!</strong> Los datos fueron actualizados.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>


            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Eliminado!</strong> Los datos fueron borrados.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>

            <!-- fin alerta -->
            <div class="table-responsive card">
                <div class="card-header" style="width: 50rem;">
                    Lista de usuarios
                </div>
                <div class="p-20">
                    <table class="table align-midle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($users as $user) {
                            ?>

                                <tr>
                                    <td scope="row"><?php echo $user->id_usuario; ?></td>
                                    <td><?php echo $user->nombre; ?></td>
                                    <td><?php echo $user->correo; ?></td>
                                    <td><?php echo $user->telefono; ?></td>
                                    <td><?php echo $user->direccion; ?></td>
                                    <td><?php echo $user->ciudad; ?></td>
                                    <td><a class="text-success" href="editar.php?id=<?php echo $user->id_usuario; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?id=<?php echo $user->id_usuario; ?>"><i class="bi bi-trash"></i></a></td>
                                </tr>

                            <?php
                            }
                            ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <form class="p-4" method="POST" action="registrar.php">
                    <div class="mb-1">
                        <!-- Nombre -->
                        <span class="txt9">
                            Nombre Completo
                        </span>

                        <input type="text" class="bo-rad-10 sizefull txt10 p-l-20" name="txtName" autofocus required autocomplete="off">
                    </div>
                    <div class="mb-1">
                        <!-- Documento -->
                        <span class="txt9">
                            Documento
                        </span>

                        <input type="number" class="bo-rad-10 sizefull txt10 p-l-20" name="txtDocument" autofocus required autocomplete="off">
                    </div>
                    <div class="mb-1">
                        <!-- Email -->
                        <span class="txt9">
                            Email
                        </span>
                        <input type="text" class="bo-rad-10 sizefull txt10 p-l-20" name="txtMail" autofocus required autocomplete="off">
                    </div>
                    <div class="mb-1">
                        <!-- Telefono -->
                        <span class="txt9">
                            Telefono
                        </span>
                        <input type="text" class="bo-rad-10 sizefull txt10 p-l-20" name="txPhone" autofocus required autocomplete="off">
                    </div>
                    <div class="mb-1">
                        <!-- Direccion -->
                        <span class="txt9">
                            Dirección
                        </span>
                        <input type="text" class="bo-rad-10 sizefull txt10 p-l-20" name="txtAddres" autofocus required autocomplete="off">
                    </div>
                    <div class="mb-1">
                        <!-- Ciudad -->
                        <span class="txt9">
                            Ciudad
                        </span>
                        <input type="text" class="bo-rad-10 sizefull txt10 p-l-20" name="txtCity" autofocus required autocomplete="off">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <div class="wrap-btn-booking flex-c-m m-t-6">
                            <!-- Button3 -->
                            <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                                GUARDAR
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'template/footer.php' ?>