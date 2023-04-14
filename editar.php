<?php
if ($_GET["id"] == '') {
    header('Location: registro_usuario.php?mensaje=vacio');
    exit();
}

include_once 'model/conexion.php';
$id = $_GET['id'];

$sql = $bd->prepare("select * from usuario where documento = ?;");
$sql->execute([$id]);
$user = $sql->fetch(PDO::FETCH_OBJ);
//print_r($persona);

if (empty($user)) {
    header('Location: registro_usuario.php?mensaje=notFound');
    exit();
}
?>

<?php include 'template/header.php' ?>

<section>

    <div class="item-slick1 item1-slick1" style="background-image: url(images/update.jpg);"></div>
    <h2 class="tit6 t-center">

    </h2>
</section>

<section class="section-reservation bg1-pattern p-t-100 p-b-113">
    <div class="container">

        <div class="t-center">
            <span class="tit2 t-center">
                ¡Hola! <?php echo $user->nombre ?>
            </span>

            <h3 class="tit3 t-center m-b-35 m-t-2">
                Tech Cell
            </h3>
        </div>

        <?php
        if ($user->estado === 0) {
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Atención!</strong> Usuario bloqueado, desbloquee el usuario antes de continuar.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        <?php
        }
        ?>

        <div class="container mt-9">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            Actualiza tus datos:
                        </div>
                        <form class="p-4" method="POST" action="editar_guardar.php">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <input type="checkbox" name="txtState" id="txtState" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" <?php if ($user->estado === 1) {
                                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                                } ?>>


                            </div>

                            <div class="col-md-11">
                                <!-- Nombre -->
                                <span class="txt9">
                                    Nombre Completo
                                </span>

                                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="txtName" autocomplete="off" value="<?php echo $user->nombre; ?>" required <?php if ($user->estado === 0) {
                                                                                                                                                                                    echo "disabled";
                                                                                                                                                                                } ?>>
                                </div>
                            </div>

                            <div class="col-md-11">
                                <!-- Documento -->
                                <span class="txt9">
                                    Documento
                                </span>

                                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="txtDocument" autofocus required value="<?php echo $user->documento; ?>" autocomplete="off" disabled>
                                </div>
                            </div>

                            <div class="col-md-11">
                                <!-- Email -->
                                <span class="txt9">
                                    Email
                                </span>

                                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="txtMail" autofocus required value="<?php echo $user->correo; ?>" autocomplete="off" <?php if ($user->estado === 0) {
                                                                                                                                                                                                echo "disabled";
                                                                                                                                                                                            } ?>>
                                </div>
                            </div>

                            <div class="col-md-11">
                                <!-- Telefono -->
                                <span class="txt9">
                                    Telefono
                                </span>

                                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="txPhone" autofocus required value="<?php echo $user->telefono; ?>" autocomplete="off" <?php if ($user->estado === 0) {
                                                                                                                                                                                                    echo "disabled";
                                                                                                                                                                                                } ?>>
                                </div>
                            </div>

                            <div class="col-md-11">
                                <!-- Direccion -->
                                <span class="txt9">
                                    Dirección
                                </span>

                                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="txtAddres" autofocus required value="<?php echo $user->direccion; ?>" autocomplete="off" <?php if ($user->estado === 0) {
                                                                                                                                                                                                    echo "disabled";
                                                                                                                                                                                                } ?>>
                                </div>
                            </div>

                            <div class="col-md-11">
                                <!-- Ciudad -->
                                <span class="txt9">
                                    Ciudad
                                </span>

                                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="txtCity" autofocus required value="<?php echo $user->ciudad; ?>" autocomplete="off" <?php if ($user->estado === 0) {
                                                                                                                                                                                                echo "disabled";
                                                                                                                                                                                            } ?>>
                                </div>
                            </div>


                            <div class="d-grid">
                                <div class="wrap-btn-booking flex-c-m m-t-6">
                                    <!-- Button3 -->
                                    <input type="hidden" name="id_usuario" value="<?php echo $user->id_usuario; ?>">
                                    <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                                        EDITAR
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'template/footer.php' ?>