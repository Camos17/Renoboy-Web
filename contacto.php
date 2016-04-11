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
					<div class="col-xs-12 col-md-6 no-padding contenido-contacto-cliente1">
						<div class="col-xs-12 no-padding dropdown filtro-asunto">
							<!-- <button class="col-xs-12 no-padding btn dropdown-toggle btn-filtro-asunto" type="button" data-toggle="dropdown"><p class="col-xs-4">Asunto</p>
								<span class="col-xs-2 col-xs-push-6">
									<i class="fa fa-caret-down"></i>
								</span>
							</button> -->
							<div class="select">
								<select class="form-control">
									<option>
										opcion 1
									</option>
									<option>
										opcion 2
									</option>
									<option>
										opcion 3
									</option>
								</select>
								<span></span>
							</div>
															
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
					</div>
					<div class="col-xs-12 col-md-6 no-padding contenido-contacto-cliente2">
						<textarea class="form-control" name="" rows="5" placeholder="MENSAJE"></textarea>
						<p class="col-xs-12 parrafo1 no-padding">Limite de carácteres 0 a 250</p>
						<p class="col-xs-12 parrafo2">Aceptas los <a href="#" title="">terminos y condiciones</a></p>
						<div class="col-xs-12 checkbox-promociones">
							<input id="checkbox-4" class="col-xs-1 checkbox-buscar" name="checkbox-4" type="checkbox" checked="">
        					<label for="checkbox-4" class="col-xs-11 checkbox-custom-label">Deseo recibir, ofertas especiales y noticias <span class="span1">Renoboy</span>.<br>Tu información está protegida por la estricta Política de Privacidad <span class="span2">Renoboy S.A.</span> y no será entregada a terceros bajo ninguna circunstancia.</label>
        				</div>
					</div>
						
					
				</form>
			</div>
		</div>

	</div>


	


	<?php include "menu-fijo.php";?>		
	<?php include "footer.php";?>