<!--===================================
=            PARA EL SLIDE            =
====================================-->
<div class="container-fluid" id="slide">
	<div class="row">
		<!--=====================================
		=            DIAPOSITIVAS               =
		======================================-->
		
		<ul>
			<!--=============================
			=            SLIDE 1            =
			==============================-->

			<?php 

				$servidor = Ruta::ctrRutaServidor();
				$slide = ControladorSlide::ctrMostrarSlide();

				foreach ($slide as $key => $value) {

					$estiloImgProducto = json_decode($value["estiloImgProducto"],true);

					$estiloTextoSlide = json_decode($value["estiloTextoSlide"], true);

					$titulo1 = json_decode($value["titulo1"], true);

					$titulo2 = json_decode($value["titulo2"], true);

					$titulo3 = json_decode($value["titulo3"], true);

					echo '
							<li>
								<img src="'.$servidor.$value["imgFondo"].'">
								<div class="slideOpciones '.$value["tipoSlide"].'">
								';
								
								if($value["imgProducto"] != "")
								{
									echo ' <img class="imgProducto" src="'.$servidor.$value["imgProducto"].'" style="top: '.$estiloImgProducto["top"].'; right: '.$estiloImgProducto["right"].'; width: '.$estiloImgProducto["width"].'; left:'.$estiloImgProducto["left"].'">
								';
								}

								echo ' 
									<div class="textosSlide"  style="top: '.$estiloTextoSlide["top"].'; right: '.$estiloTextoSlide["right"].'; width: '.$estiloTextoSlide["width"].'; left:'.$estiloTextoSlide["left"].'">
										<h1 style="color: '.$titulo1["color"].';">'.$titulo1["texto"].' </h1>
										<h2  style="color:'.$titulo2["color"].'">'.$titulo2["texto"].'</h2>
										<h3  style="color: '.$titulo3["color"].'">'.$titulo3["texto"].'</h3>

										<a href="#">
											'.$value["bottonVerProducto"].'
										</a>
									</div>
									
								</div>
							</li>';
				}
			 ?>



			<!--=============================
			=            SLIDE 2            =
			==============================-->
			<!-- <li>
				<img src="http://localhost/backend/vistas/img/slide/default/back_default.jpg">
				<div class="slideOpciones slideOpcion2">
					<img class="imgProducto" src="http://localhost/BackEnd/Vistas/img/slide/slide2/curso.png">

					<div class="textosSlide" style="top: 20%; right: 10%; width: 40%;">
						<h1 style="color: #333;">Lorem ipsum dolor </h1>
						<h2 style="color: #777;">Lorem ipsum dolor sit amet</h2>
						<h3 >Lorem ipsum dolor sit amet</h3>

						<a href="#">
							<button class="btn btn-default backColor text-upercase">VER PRODUCTO <span class="fa fa-chevron-right"></span> </button>
						</a>
					</div>
					
				</div>
			</li>
 -->
		</ul>

		<!--=============================
		=            PAGINACION         =
		==============================-->
		<ol id="paginacion">

			<?php 
				for ($i=1; $i <= count($slide) ; $i++) { 
					echo '<li item = "'.$i.'"><span class="fa fa-circle"></span></li>';
				}
			 ?>
		<!-- 	<li item = "2"><span class="fa fa-circle"></span></li>
			<li item = "3"><span class="fa fa-circle"></span></li>
			<li item = "4"><span class="fa fa-circle"></span></li> -->
		</ol>


		<!--=============================
		=            FLECHAS            =
		==============================-->
		<div class="flechas" id="retroceder"><span class="fa fa-chevron-left"></span></div>
		<div class="flechas" id="avanzar"><span class="fa fa-chevron-right"></span></div>
		
	</div>
</div>
<!--====  End of PARA EL SLIDE  ====-->

<div class="row">
	<div class="col-xs-12 text-center">
		<button id="btnSlide" class="backColor"> <i class="fa fa-angle-up"></i></button>
	</div>
</div>


