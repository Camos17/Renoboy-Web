		<?php include "header.php";?>

		<div class="col-xs-12 no-padding content-wrapper fondo-buscador">
			<div class="col-xs-12 col-md-12 headline-buscador-servicios">
				<h1>buscador de servicio renoboy</h1>
				<h2>Usa nuestra búsqueda guiada para encontrar el servicio perfecto que se adapte a tus necesidades
				</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 no-padding buscador-servicios">
				<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
					<div class="col-xs-12 col-sm-12 servicio-recomendado">
						<div class="col-xs-12 no-padding">	
							<h2>ENCUENTRE EL SERVICIO <br> RECOMENDADO</h2>
						</div>					
					</div>
					<div class="col-sm-6 col-md-12">		
						<div class="col-xs-12 no-padding seccion-servicio-utilizacion">	
							<div class="col-xs-12 no-padding">
								<li class="col-xs-6 titulo-seccion">
									UTILIZACIÓN
								</li>
								<li class="col-xs-6 seleccionartodas">
									<input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox" checked="">
        							<label for="checkbox-1" class="checkbox-custom-label">First Choice</label>
								</li>					
							</div>
							<div class="col-xs-12 icono-ayuda">
								<a id="ayuda-utilizacion" href="#" title="">
									<i class="col-xs-2 col-xs-offset-10 fa fa-question-circle"></i>
								</a>
							</div>
							<div class="col-xs-12 col-sm-12 iconos-servicio-recomendado">	
								<div class="col-xs-6 col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-0 icono-recomendado">			
								<button type="button"class="col-xs-12 btn-servicio-regional">
										<img class="img-responsive" src="img/REGIONAL.svg" alt="">
										<span class="col-xs-12 no-padding">Regional</span>	
									</button>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-3 icono-recomendado">
									<button type="button" class="col-xs-12 btn-servicio-mixta">
										<img class="img-responsive" src="img/MIXTA.svg" alt="">
										<span class="col-xs-12 no-padding">Mixta</span>
									</button>					
								</div>					
								<div class="col-xs-6 col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-0 icono-recomendado">
									<button type="button" class="col-xs-12 btn-servicio-urbano">
										<img class="img-responsive" src="img/URBANO.svg" alt="">
										<span class="col-xs-12 no-padding">Urbano</span>
									</button>					
								</div>
								<div class="col-xs-6 col-sm-4 col-md-3 icono-recomendado">
									<button type="button" class="col-xs-12 btn-servicio-cantera">
										<img class="img-responsive" src="img/CANTERA.svg" alt="">
										<span class="col-xs-12 no-padding">Cantera</span>
									</button>				
								</div>														
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-12 buscador-columna2">
						<div class="col-xs-12 no-padding seccion-servicio-posicion">
							<li class="col-xs-4 titulo-seccion">
									POSICIÓN
							</li>
							<li class="col-xs-4 col-xs-offset-2">
								 <select>
									<option value="volvo">Tracción</option>
									<option value="saab">Saab</option>
									<option value="mercedes">Mercedes</option>
									<option value="audi">Audi</option>
								</select>
							</li>
							<li class="col-xs-2 pull-right">
								<a id="ayuda-posicion" href="#" title="">
									<i class="fa fa-question-circle"></i>
								</a>
							</li>
						</div>
						<div class="col-xs-12 no-padding seccion-servicio-dimension">
							<li class="col-xs-4 titulo-seccion">
								DIMENSIÓN
							</li>
							<li class="col-xs-7 pull-right">
								 <select class="col-xs-12">
									<option value="volvo">295/80 R 22.5</option>
									<option value="saab">Saab</option>
									<option value="mercedes">Mercedes</option>
									<option value="audi">Audi</option>
								</select>
							</li>
						</div>
						<div class="col-xs-12 no-padding seccion-servicio-categoria">
							<li class="col-xs-4 titulo-seccion">
								CATEGORÍA
							</li>
							<li class="col-xs-12 no-padding">
								<select multiple class="form-control">
									<option>Tu llanta NUEVA de NUEVO</option>
									<option>Línea Premium</option>
									<option>Línea Básica</option>
								</select>
							</li>
							<li class="col-xs-8 col-xs-offset-2 col-sm-5 col-sm-offset-6 col-md-6 col-md-offset-5 no-padding btn-buscar-servicio">
								<button class="btn btn-default btn-buscar-servicio col-xs-12" type="submit">BUSCAR MI SERVICIO</button>
							</li>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-12 no-padding ayuda-buscador-servicios">
					<div class="col-xs-12 col-sm-12 col-md-4 no-padding headline-ayuda-buscador">
						<h2>AYUDA
							<button class="col-xs-1 pull-right btn btn-cerrar-ayuda-buscador" type="button">
								<i class="ion-android-close"></i>
							</button>
						</h2>
					</div>
					<div class="col-xs-12 contenido-ayuda1">	
						<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 no-padding contenido-ayuda2">
							<div class="col-xs-3">
								<img class="img-responsive" src="http://placehold.it/50x50" alt="">
							</div>
							<div class="col-xs-9 no-padding">
								<ul class="col-xs-12">
									<li>Recorridos por carreteras secundarias de doble snetido de circulación y en autopistas.</li>
									<li>Recorridos por carreteras regionales y nacionales con frecuente solicitación de aceleración y frenado.</li>
									<li>Cargas medianas y pesadas.</li>
									<li>Velocidades moderadas hasta 100 km/h en tramos cortos.</li>
									<li>Recorridos hasta de 500 km por día donde usualmente los vehículos llegan a su base.</li>
								</ul>
							</div>
								<div class="col-xs-3">
								<img class="img-responsive" src="http://placehold.it/50x50" alt="">
							</div>
							<div class="col-xs-9 no-padding">
								<ul class="col-xs-12">
									<li>Recorridos por carreteras secundarias de doble snetido de circulación y en autopistas.</li>
									<li>Recorridos por carreteras regionales y nacionales con frecuente solicitación de aceleración y frenado.</li>
									<li>Cargas medianas y pesadas.</li>
									<li>Velocidades moderadas hasta 100 km/h en tramos cortos.</li>
									<li>Recorridos hasta de 500 km por día donde usualmente los vehículos llegan a su base.</li>
								</ul>
							</div>
								<div class="col-xs-3">
								<img class="img-responsive" src="http://placehold.it/50x50" alt="">
							</div>
							<div class="col-xs-9 no-padding">
								<ul class="col-xs-12">
									<li>Recorridos por carreteras secundarias de doble snetido de circulación y en autopistas.</li>
									<li>Recorridos por carreteras regionales y nacionales con frecuente solicitación de aceleración y frenado.</li>
									<li>Cargas medianas y pesadas.</li>
									<li>Velocidades moderadas hasta 100 km/h en tramos cortos.</li>
									<li>Recorridos hasta de 500 km por día donde usualmente los vehículos llegan a su base.</li>
								</ul>
							</div>
								<div class="col-xs-3">
								<img class="img-responsive" src="http://placehold.it/50x50" alt="">
							</div>
							<div class="col-xs-9 no-padding">
								<ul class="col-xs-12">
									<li>Recorridos por carreteras secundarias de doble snetido de circulación y en autopistas.</li>
									<li>Recorridos por carreteras regionales y nacionales con frecuente solicitación de aceleración y frenado.</li>
									<li>Cargas medianas y pesadas.</li>
									<li>Velocidades moderadas hasta 100 km/h en tramos cortos.</li>
									<li>Recorridos hasta de 500 km por día donde usualmente los vehículos llegan a su base.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 cat-llantas">
				<div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-6 col-md-offset-0 no-padding">			
					<a href="#" class="col-xs-6 cat-llanta">
						<div class="col-xs-12 no-padding cat-llanta-wrapper">
							<img  class="img-responsive" src="img/1.jpg" alt="">
							<p class="titulo-layer-llanta">WHL</p>
							<div class="col-xs-12 no-padding layer-cat-llanta">
								<p class="subtitulo-layer-llanta">West Hauler <br> Lug</p>
								<p class="texto-layer-llanta">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							</div>
						</div>					
					</a>
					<a href="#" class="col-xs-6 cat-llanta">
						<div class="col-xs-12 no-padding cat-llanta-wrapper">
							<img  class="img-responsive" src="img/1.jpg" alt="">
							<p class="titulo-layer-llanta">XZE-2</p>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-6 col-md-offset-0 no-padding">
					<a href="#" class="col-xs-6 cat-llanta">
						<div class="col-xs-12 no-padding cat-llanta-wrapper">
							<img  class="img-responsive" src="img/1.jpg" alt="">
							<p class="titulo-layer-llanta">XZE-2</p>
						</div>
					</a>
					<a href="#" class="col-xs-6 cat-llanta">
						<div class="col-xs-12 no-padding cat-llanta-wrapper">
							<img  class="img-responsive" src="img/1.jpg" alt="">
							<p class="titulo-layer-llanta">XZE-2</p>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-6 col-md-offset-0 no-padding">				
					<a href="#" class="col-xs-6 cat-llanta">
						<div class="col-xs-12 no-padding cat-llanta-wrapper">
							<img  class="img-responsive" src="img/1.jpg" alt="">
							<p class="titulo-layer-llanta">XZE-2</p>
						</div>					
					</a>
					<a href="#" class="col-xs-6 cat-llanta">
						<div class="col-xs-12 no-padding cat-llanta-wrapper">
							<img  class="img-responsive" src="img/1.jpg" alt="">
							<p class="titulo-layer-llanta">XZE-2</p>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-6 col-md-offset-0 no-padding">				
					<a href="#" class="col-xs-6 cat-llanta">
						<div class="col-xs-12 no-padding cat-llanta-wrapper">
							<img  class="img-responsive" src="img/1.jpg" alt="">
							<p class="titulo-layer-llanta">XZE-2</p>
						</div>
					</a>
					<a href="#" class="col-xs-6 cat-llanta">
						<div class="col-xs-12 no-padding cat-llanta-wrapper">
							<img  class="img-responsive" src="img/1.jpg" alt="">
							<p class="titulo-layer-llanta">XZE-2</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		
		<?php include "menu-fijo.php";?>
		<?php include "footer.php";?>

	</body>	
</html>	

