<?php include 'template/header.php' ?>


<!-- Title Page -->
<section>

	<div class="item-slick1 item1-slick1" style="background-image: url(images/contacto.jpg);"></div>
	<h2 class="tit6 t-center">

	</h2>
</section>


<!-- Reservation -->
<section class="section-reservation bg1-pattern p-t-100 p-b-113">
	<div class="container">
		<div class="row">

			<div class="col-lg-12 p-b-30">
				<div class="t-center">
					<span class="tit2 t-center">
						Registro usuarios
					</span>

					<h3 class="tit3 t-center m-b-35 m-t-2">
						Tech Cell
					</h3>
				</div>


				<!-- inicio alerta -->
				<?php
				if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'vacio') {
				?>
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Error!</strong> Rellena todos los campos.
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
				if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'notFound') {
				?>
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Error!</strong> Usuario no encontrado.
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
				if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'found') {
				?>
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Error!</strong> Usuario ya se encuentra registrado.
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
				if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Registrado!</strong> Se agregaron los datos.
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
				if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Cambiado!</strong> Los datos fueron actualizados.
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
				if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
				?>
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Eliminado!</strong> Los datos fueron borrados.
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




				<!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#myModal">Buscar Usuarios</button>
				</div> -->

				<form class="wrap-form-reservation size22 m-l-r-auto" method="POST" action="registrar.php">
					<div class="row">
						<div class="col-md-4">
							<!-- Nombre Completo -->
							<span class="txt9">
								Nombre Completo
							</span>

							<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="txtName" autofocus required autocomplete="off">
							</div>
						</div>


						<div class="col-md-4">
							<!-- Documento -->
							<span class="txt9">
								Documento
							</span>

							<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" name="txtDocument" autofocus required autocomplete="off" type="number">
							</div>
						</div>

						<div class="col-md-4">
							<!-- Email -->
							<span class="txt9">
								Email
							</span>

							<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" name="txtMail" autofocus required autocomplete="off" type="email">
							</div>
						</div>


					</div>

					<div class="row">

						<div class="col-md-4">
							<!-- Telefono -->
							<span class="txt9">
								Telefono
							</span>

							<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" name="txPhone" autofocus required autocomplete="off" type="number">
							</div>
						</div>

						<div class="col-md-4">
							<!-- Direccion -->
							<span class="txt9">
								Dirección
							</span>

							<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" name="txtAddres" autofocus required autocomplete="off" type="text">
							</div>
						</div>

						<div class="col-md-4">
							<!-- Ciudad -->
							<span class="txt9">
								Ciudad
							</span>

							<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" name="txtCity" autofocus required autocomplete="off" type="text">
							</div>
						</div>


					</div>

					<div class="wrap-btn-booking d-flex justify-content-between">
						<input type="hidden" name="oculto" value="1">
						<!-- Button3 -->
						<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
							GUARDAR
						</button>
						<button type="button" class="btn3 flex-c-m size13 txt11 trans-0-4" data-toggle="modal" data-target="#myModal">
							BUSCAR USUARIOS
						</button>
					</div>
				</form>
			</div>
		</div>


	</div>
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
		<form class="p-4" method="GET" action="editar.php">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title">Introduzca numero de documento</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-12">
						<!-- Numero de documento -->
						<div class="wrap-inputdocument size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="id" placeholder="Numero de identificación" autocomplete="off">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
						BUSCAR
					</button>
				</div>
			</div>
		</form>
	</div>
</div>

<?php include 'template/footer.php' ?>