
<!--===========================
=            HEAD             =
============================-->

<div class="container-fluid barraSuperior" id="top">
	<div class="container">
		<div class="row">
			<!--============================
				=            SOCIAL            =
				=============================-->
			<div class="col-xs-12 col-sm-8 col-md-9 social">
				<ul>
					<?php 
						$social = ControladorPlantilla::ctrEstiloPlantilla();

						$jsonRedesSociales = json_decode($social["redesSociales"], true);

						foreach ($jsonRedesSociales as $key => $value) {
							# code...
							echo 
								'<li>
									<a href="'.$value["url"].'" target="_blank"><i class="fab '.$value["red"].' redSocial '.$value["estilo"].'"></i></a>
								</li>';
						}
					 ?>
					
<!-- 					<li>
						<a href="http://yputube.com/" target="_blank"><i class="fab fa-youtube redSocial youtubeBlanco"></i></a>
					</li>
					<li>
						<a href="http://twitter.com/" target="_blank"><i class="fab fa-twitter redSocial twitterBlanco"></i></a>
					</li>
					<li>
						<a href="http://google.com/" target="_blank"><i class="fab fa-google-plus redSocial googleBlanco"></i></a>
					</li>
					<li>
						<a href="http://instagram.com/" target="_blank"><i class="fab fa-instagram redSocial instagramBlanco"></i></a>
					</li> -->
				</ul>
			</div>

			<!--==============================
			=            REGISTRO            =
			===============================-->
			
			<div class="col-xs-12 col-sm-4 col-md-3 registro">
				<ul>
					<li><a href="#modalIngresar" data-toggle="modal">Ingresar</a></li>
					<li>|</li>
					<li><a href="#modalRegistro" data-toggle="modal">Crear Cuenta</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--====  End of HEAD   ====-->

<!--============================
=            HEADER            =
=============================-->
<header id="header" class="container-fluid">
	<div class="container">
		<div class="row" id="cabezote">
			<!--==============================
			=            LOGOTIPO            =
			===============================-->
			<div class="col-xs-12 col-sm-2 col-md-3" id="logotipo">
				<a href="#" >
					<img src="http://localhost/BackEnd/<?php echo $social["logo"] ?>" class="img-responsive">
				</a>
			</div>
			<!--==================================================
			=            BLOQUE CATEGORIAS Y BUSCADOR            =
			===================================================-->
			<div class="col-xs-12 col-sm-8 col-md-6">
				<!--======================================
				=            BOTON CATEGORIAS            =
				=======================================-->
				<div class="col-xs-12 col-sm-4 backColor" id="btnCategorias">
					<p>CATEGORIAS
					<span class="pull-right"><i class="fa fa-bars"></i> </span>
					</p>	
				</div>

				<!--==============================
				=            BUSCADOR            =
				===============================-->
				<div class="col-xs-12 col-sm-8" id="buscador">
					<div class="input-group">
				    <input type="search" class="form-control" name="buscar" placeholder="Buscar ..">
				    <div class="input-group-btn">
				      <button class="btn btn-default backColor" type="submit">
				        <i class="glyphicon glyphicon-search"></i>
				      </button>
				    </div>
				  </div>
				</div>
			</div>
			<!--========================================
			=            CARRITO DE COMPRAS            =
			=========================================-->
			<div class="col-xs-12 col-sm-2 col-md-3 " id="carrito">
				<a href="#">
					<button type="" class="btn btn-default pull-left backColor">
						<i class="fa fa-shopping-cart"></i>
					</button>
				</a>
				<p>TU CESTA <span class="cantidadCesta"></span> <br>USD $ <span class="sumaCesta"></span> </p>
			</div>
		</div>
		<!--================================
		=            CATEGORIAS            =
		=================================-->
		<div class="col-xs-12 backColor" id="categorias">
			
			<?php 
				$item = null;
				$valor = null;
				$categorias = ControladorProductos::crtMostrarCategorias($item, $valor);

				foreach ($categorias as $key => $value) {
					echo '			
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
							<h4>
								<a href="'.$value["ruta"].'" class="pixelCategorias">
									'.$value["categoria"].'
								</a>
							</h4>
							<hr>
							<ul>';

							$item = "id_categoria";
							$valor = $value["Id"];
							$subCategorias = ControladorProductos::crtMostrarSubCategorias($item, $valor);
							foreach ($subCategorias as $keySub => $valueSub) {
							echo '
								<li><a href="'.$valueSub["ruta"].'" class="pixelSubCategorias">'.$valueSub["subCategoria"].'</a></li>';
							}

							echo '
								</ul>
							</div>';
				}
			 ?>


<!-- 			<div class="col-xs-12 col-sm-4 col-md-3">
				<h4>
					<a href="#" class="pixelCategorias">
						Lorem ipsum dolor
					</a>
				</h4>
				<hr>
				<ul>
					<li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
				</ul>
			</div>

				<div class="col-xs-12 col-sm-4 col-md-3">
				<h4>
					<a href="#" class="pixelCategorias">
						Lorem ipsum dolor
					</a>
				</h4>
				<hr>
				<ul>
					<li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
				</ul>
			</div>

			<div class="col-xs-12 col-sm-4 col-md-3">
				<h4>
					<a href="#" class="pixelCategorias">
						Lorem ipsum dolor
					</a>
				</h4>
				<hr>
				<ul>
					<li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem ipsum</a></li>
				</ul>
			</div> -->
		</div>
		<!--====  End of CATEGORIAS  ====-->
	</div>
</header><!-- /header -->


<!--====  End of HEADER  ====-->

