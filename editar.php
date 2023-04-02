<?php include 'template/header.php' ?>

<?php
if (!isset($_GET['id'])) {
    header('Location: index.php?mensaje=error');
    exit();
}

include_once 'model/conexion.php';
$id = $_GET['id'];

$sql = $bd->prepare("select * from usuario where id_usuario = ?;");
$sql->execute([$id]);
$user = $sql->fetch(PDO::FETCH_OBJ);
//print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <form class="p-4" method="POST" action="editar_guardar.php">

                <div class="col-md-11">
                        <!-- Nombre -->
                        <span class="txt9">
                            Nombre Completo
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="txtName" value="<?php echo $user->nombre; ?>" required>
                        </div>
                    </div>

                    <div class="col-md-11">
                        <!-- Documento -->
                        <span class="txt9">
                            Documento
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="txtDocument" autofocus required value="<?php echo $user->documento; ?>" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-md-11">
                        <!-- Email -->
                        <span class="txt9">
                            Email
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="txtMail" autofocus required value="<?php echo $user->correo; ?>" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-md-11">
                        <!-- Telefono -->
                        <span class="txt9">
                            Telefono
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="txPhone" autofocus required value="<?php echo $user->telefono; ?>" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-md-11">
                        <!-- Direccion -->
                        <span class="txt9">
                            Dirección
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="txtAddres" autofocus required value="<?php echo $user->direccion; ?>" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-md-11">
                        <!-- Ciudad -->
                        <span class="txt9">
                            Ciudad
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="txtCity" autofocus required value="<?php echo $user->ciudad; ?>" autocomplete="off">
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

<?php include 'template/footer.php' ?>