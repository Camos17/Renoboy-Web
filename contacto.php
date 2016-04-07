	<?php include "header.php";?>

	<div class="col-xs-12 wrapper-contacto no-padding fondo-contacto">
		<div class="col-xs-12 layer-fondo-contacto">
			<div class="col-xs-12 contenido-contacto">
				<div class="col-xs-12 no-padding contenido1">
					<div class="col-xs-3 no-padding icono">
						<span class="col-xs-12">
							<i class="col-xs-12 no-padding fa fa-envelope"></i>
						</span>
					</div>
					<div class="col-xs-8 col-xs-offset-1">
						<div class="col-xs-12 no-padding texto-contenido">
							<p>Escríbanos</p>
							<p>Es Dsitribuidor o Cliente actual de Renoboy?</p>
						</div>
						<div class="col-xs-12 btns-opciones">
							<a class="col-xs-3 col-xs-push-5" href="contacto-cliente.php" title="">Si</a>
							<a class="col-xs-3 col-xs-push-5" href="#" title="">No</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 no-padding contenido1">
					<div class="col-xs-3 no-padding icono">
						<span class="col-xs-12">
							<i class="col-xs-12 no-padding fa fa-phone"></i>
						</span>
					</div>
					<div class="col-xs-8 col-xs-offset-1">
						<div class="col-xs-12 no-padding texto-contenido">
							<p>Llámenos</p>
							<p>Línea <a href="tel: 018000 510  141" title="">018000 510  141</a> <br>
							Lunes a Viernes  de 8:00 a.m. a 5:00 p.m. <br>
							Sábado  8:00 a.m.  a 12:00 	p.m. </p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 no-padding contenido1">
					<div class="col-xs-3 no-padding icono">
						<span class="col-xs-12">
							<i class="col-xs-12 no-padding fa fa-map-marker"></i>
						</span>
					</div>
					<div class="col-xs-8 col-xs-offset-1">
						<div class="col-xs-12 no-padding texto-contenido">
							<p>Ubicar un Centro de  Servicio</p>
							<p>Encuentre su distribuidor más cercano <a href="reddedistribuidores.php" title="">aquí</a></p>
						</div>
					</div>
				</div>

				<form class="col-xs-12 no-padding contenido-contacto-cliente">
					<div class="col-xs-12 headline-contacto-cliente">
						<h2>Contacto Cliente / Distribuidor</h2>
					</div>
					<div class="col-xs-12 no-padding dropdown filtro-asunto">
						<button class="col-xs-12 no-padding btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
							<span class="caret"></span>
						</button>
						<ul class="col-xs-12 dropdown-menu">
							<li><a href="#">HTML</a></li>
							<li><a href="#">CSS</a></li>
							<li><a href="#">JavaScript</a></li>
						</ul>
					</div>				
					<div class="col-xs-12 no-padding formulario-contacto-cliente">
						<div class="form-group">
							<input type="" class="form-control" id="razon-social" placeholder="Razón Social*">
						</div>
						<div class="form-group">
							<input type="" class="form-control" id="nombres-apellidos" placeholder="Contacto (Nombre y Apellidos)*">
						</div>
						<div class="form-group">
							<input type="" class="form-control" id="ciudad" placeholder="Ciudad*">
						</div>
						<div class="form-group">
							<input type="" class="form-control" id="e-mail" placeholder="E-mail*">
						</div>
						<div class="form-group">
							<input type="" class="form-control" id="telefono" placeholder="Número de Teléfono">
						</div>
					</div>
					<textarea name="" rows="4"></textarea>
				</form>
			</div>
		</div>

	</div>


	


	<?php include "menu-fijo.php";?>		
	<?php include "footer.php";?>