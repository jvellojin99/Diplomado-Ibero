<?php


include_once 'model/conexion.php';
$password = $_GET['password'];

if ($password !== 'Admin*123') {
    header('Location: contactenos.php?mensaje=passwordIncorrect');
    exit();
}

$services = $bd->query("select * from servicios;");

//print_r($persona);

if (empty($services)) {
    header('Location: contactenos.php?mensaje=notFound');
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

    <div class="col-lg-12 p-b-30">
				<div class="t-center">
					<span class="tit2 t-center">
						Listado de Servicios
					</span>

					<h3 class="tit3 t-center m-b-35 m-t-2">
						Tech Cell
					</h3>
				</div>


				<!-- inicio alerta -->


				<?php
				if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
				?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Error!</strong> Vuelve a intentar.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>

					<script>
						window.setTimeout(function() {
							$(".alert").fadeTo(500, 0).slideUp(500, function() {
								$(this).remove();
							});
						}, 5000);
					</script>
				<?php
				}
				?>


				<?php
				if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'actualizado') {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Actualizado!</strong> Los datos fueron actualizados.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>

					<script>
						window.setTimeout(function() {
							$(".alert").fadeTo(500, 0).slideUp(500, function() {
								$(this).remove();
							});
						}, 5000);
					</script>
				<?php
				}
				?>

				<!-- fin alerta -->



        <div class="card">
            <div class="card-header">
                Lista de servicios
            </div>
            <div class="p-4">
                <table class="table align-middle table-responsive table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Medio</th>
                            <th scope="col">Observación</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Cambiar Estado</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($services as $dato) {
                        ?>

                            <tr>
                                <td scope="row"><?php echo $dato['idServicio']; ?></td>
                                <td><?php echo $dato['documento']; ?></td>
                                <td><?php echo $dato['fecha']; ?></td>
                                <td><?php echo $dato['hora']; ?></td>
                                <td><?php echo $dato['tipo']; ?></td>
                                <td><?php echo $dato['medio']; ?></td>
                                <td><?php echo $dato['observacion']; ?></td>
                                <td><?php echo $dato['estado'] == 1 ? "Activo" : "Inactivo"; ?></td>
                                
                                <td><a onclick="confirm('Estas seguro de actualizar el estado?');" href="actualizar_estado_servicio.php?id=<?php echo $dato['idServicio'] ?>"   <?php if ($dato['estado'] === 0) {
                                                                                                                                                                                    echo "class=text-danger";
                                                                                                                                                                                }else
                                                                                                                                                                                {
                                                                                                                                                                                    echo "class=text-success";
                                                                                                                                                                                } ?> >  
                                                                                                                                                                                <i class="
                                                                                                                                                                                 <?php if ($dato['estado'] === 1) {
                                                                                                                                                                                    echo "bi bi-shield-check";
                                                                                                                                                                                }else
                                                                                                                                                                                {
                                                                                                                                                                                    echo "bi bi-shield-x";
                                                                                                                                                                                } ?>" >
                                                                                                                                                                                </i>
                                                                                                                                                                                </a></td>

                            </tr>

                        <?php
                        }
                        ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>

<?php include 'template/footer.php' ?>