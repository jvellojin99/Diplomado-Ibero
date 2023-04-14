<?php include 'template/header.php' ?>


<!-- Title Page -->
<section>

	<div class="item-slick1 item1-slick1" style="background-image: url(images/fondo-contacto.jpg);"></div>
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
						Formulario (solicitud de servicio)
					</span>

					<h3 class="tit3 t-center m-b-35 m-t-2">
						Tech Cell
					</h3>
				</div>

				<form class="wrap-form-reservation size22 m-l-r-auto">
					<div class="row">
						<div class="col-md-4">
							<!-- Date -->
							<span class="txt9">
								Fecha deseada
							</span>

							<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="date">
								<i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
							</div>
						</div>

						<div class="col-md-4">
							<!-- Time -->
							<span class="txt9">
								Hora
							</span>

							<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<!-- Select2 -->
								<select class="selection-1" name="time">
									<option>Seleccione la hora del servicio</option>
									<option>8:00</option>
									<option>10:00</option>
									<option>12:00</option>
									<option>14:00</option>
									<option>18:00</option>
								</select>
							</div>
						</div>

						<div class="col-md-4">
							<!-- Time -->
							<span class="txt9">
								Usuario que solicita
							</span>

							<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<!-- Select2 -->
								<select class="selection-1" name="time">
									<option>Seleccione una opción</option>
									<option>8:00</option>
									<option>10:00</option>
									<option>12:00</option>
									<option>14:30</option>
									<option>18:00</option>
								</select>
							</div>
						</div>


					</div>

					<div class="row">

						<div class="col-md-4">
							<!-- People -->
							<span class="txt9">
								Tipo
							</span>

							<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<!-- Select2 -->
								<select class="selection-1" name="people">
									<option>Seleccione una opción</option>
									<option>ECommers</option>
									<option>Mantenimiento de servidores</option>
									<option>Virtualizacion de servidores</option>
									<option>Creación de copias de seguridad</option>
									<option>Capacitaciones de servidores</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<!-- People -->
							<span class="txt9">
								Medio de Presentación
							</span>

							<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<!-- Select2 -->
								<select class="selection-1" name="people">
									<option>Seleccione una opción</option>
									<option>Virtual</option>
									<option>Presencial</option>
								</select>
							</div>
						</div>

						<div class="col-md-4">
							<!-- Phone -->
							<span class="txt9">
								Observación
							</span>

							<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
								<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="Observación">
							</div>
						</div>

					</div>

					<div class="wrap-btn-booking flex-c-m m-t-6">
						<!-- Button3 -->
						<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
							AGENDAR
						</button>
					</div>
				</form>
			</div>
		</div>


	</div>
</section>


<!-- Footer -->
<footer class="bg1">

	<div class="end-footer bg2">
		<div class="container">
			<div class="flex-sb-m flex-w p-t-22 p-b-22">
				<div class="p-t-5 p-b-5">
					<a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
					<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
					<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>


					<ul>
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							Bogota DC
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							(+601) 746 68 76
						</li>
					</ul>
				</div>

				<div class="txt17 p-r-20 p-t-5 p-b-5">
					<p align="right">Copyright &copy; 2023 All rights reserved <i class="fa fa-heart"></i> by <a href="https://www.ibero.edu.co/" target="_blank">Ibero</a>
					</p>
					<p align="right"><span class="txt14 m-b-14"> <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							servicioalestudiante@ibero.edu.co </span></p>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
	<span class="symbol-btn-back-to-top">
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
<script type="text/javascript">
	$('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>

</html>