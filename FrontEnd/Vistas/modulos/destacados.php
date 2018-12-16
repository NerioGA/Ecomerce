<!--===========================
=            BANER            =
============================-->
<?php 
	$servidor = Ruta::ctrRutaServidor();
 ?>

<figure class="banner">
	
	<img src="<?php echo $servidor;?>Vistas/img/banner/default.jpg" alt="">

	<div class="textoBanner textoDer">
		<h1 style="color: #fff">OFERTAS ESPECIALES</h1>
		<h2 style="color: #fff">50% off</h2>
		<h3 style="color: #fff">Termina el 31 de Octubre</h3>
	</div>
	
</figure>


<!--====  End of BANER  ====-->


<!--===============================================
=            BARRA DE PRODUCTOS GRATIS            =
================================================-->
<div class="container-fluid well well-sm barraProductos">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 organizarProductos">
				<div class="btn-group pull-right">
					<button type="button" class="btn btn-default btnGrid" id="btnGrid0">
						<i class="fa fa-th"></i>
						 <span class="visible-sm visible-md visible-lg pull-right"> GRID</span>
					</button>

					<button type="button" class="btn btn-default btnList" id="btnList0">
						<i class="fa fa-list"></i>
						 <span class="visible-sm visible-md visible-lg pull-right"> LIST</span>
					</button>
				</div>
			</div>
		</div>
	</div>
	
</div>

<!--====  End of BARRA DE PRODUCTOS GRATIS  ====<-->
<div class="container-fluid productos">
	<div class="container">
		<div class="row">
			<!--======================================
			=            BARRA DE TITULOS            =
			=======================================-->
			<div class="col-xs-12 tituloDestacado">
				<div class="col-xs-12 col-sm-6">
				<h1><small>ARTICULOS GRATUITOS</small> </h1>
				</div>
					<div class="col-xs-12 col-sm-6">
						<a href="articulos-gratis">
							<button class="btn btn-default backColor pull-right">VER MAS <span class="fa fa-chevron-right"></span> </button>
						</a>
					</div>
			</div>
			<div class="clearfix">
				
			</div>
			<hr>
		</div>
		<!--========================================================
		=            VITRINA DE PRODUCTOS EN CUADRICULA            =
		=========================================================-->
		<ul class="grid0" style="display: none;">
			<!--producto1-->
			<li class="col-md-3 col-sm-6 col-xs-12">
				<figure>
					<a href="#" title="" class="img-responsive pixelProducto">
						<img src="<?php echo $servidor;?>Vistas/img/productos/accesorios/accesorio04.jpg"  alt="">

					</a>
				</figure>

				<h4>
					<small>
					<a href="#" title="" class="pixelProducto">
						collar de diamantes <hr>
					</a>
					</small>
				</h4>
				<div class="col-xs-6 precio">
					<h2><small>GRATIS</small></h2>
				</div>
				<div class="col-xs-6 enlaces">
					<div class="btn-group pull-right">
						
						<button type="button" class="btn btn-default btn-xs deseos" idProducto="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
						</button>

						<a href="#" title="" class="pixelProducto">
							<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>
			</li> 
			<!--FIN DE PRODUCTOS 1-->

			<!--producto2-->
			<li class="col-md-3 col-sm-6 col-xs-12">
				<figure>
					<a href="#" title="" class="img-responsive pixelProducto">
						<img src="<?php echo $servidor;?>Vistas/img/productos/accesorios/accesorio03.jpg"  alt="">

					</a>
				</figure>

				<h4>
					<small>
					<a href="#" title="" class="pixelProducto">
						bolso deportivo gris<hr>
					</a>
					</small>
				</h4>
				<div class="col-xs-6 precio">
					<h2><small>GRATIS</small></h2>
				</div>
				<div class="col-xs-6 enlaces">
					<div class="btn-group pull-right">
						
						<button type="button" class="btn btn-default btn-xs deseos" idProducto="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
						</button>

						<a href="#" title="" class="pixelProducto">
							<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>
			</li> <!--FIN DE PRODUCTOS 2-->

			<!--producto 3-->
			<li class="col-md-3 col-sm-6 col-xs-12">
				<figure>
					<a href="#" title="" class="img-responsive pixelProducto">
						<img src="<?php echo $servidor;?>Vistas/img/productos/accesorios/accesorio02.jpg"  alt="">

					</a>
				</figure>

				<h4>
					<small>
					<a href="#" title="" class="pixelProducto">
						accesorio militar <hr>
					</a>
					</small>
				</h4>
				<div class="col-xs-6 precio">
					<h2><small>GRATIS</small></h2>
				</div>
				<div class="col-xs-6 enlaces">
					<div class="btn-group pull-right">
						
						<button type="button" class="btn btn-default btn-xs deseos" idProducto="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
						</button>

						<a href="#" title="" class="pixelProducto">
							<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>
			</li> <!--FIN DE PRODUCTOS 3-->

			<!--producto 4-->
			<li class="col-md-3 col-sm-6 col-xs-12">
				<figure>
					<a href="#" title="" class="img-responsive pixelProducto">
						<img src="<?php echo $servidor;?>Vistas/img/productos/accesorios/accesorio01.jpg"  alt="">
					</a>
				</figure>
				<h4>
					<small>
					<a href="#" title="" class="pixelProducto">
						pulsera de diamantes <hr>
					</a>
					</small>
				</h4>
				<div class="col-xs-6 precio">
					<h2><small>GRATIS</small></h2>
				</div>
				<div class="col-xs-6 enlaces">
					<div class="btn-group pull-right">
						
						<button type="button" class="btn btn-default btn-xs deseos" idProducto="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
						</button>

						<a href="#" title="" class="pixelProducto">
							<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>
			</li> <!--FIN DE PRODUCTOS 2-->
		</ul>

		<!--===================================================
		=            VITRINA DE PRODUCTOS EN LISTA            =
		====================================================-->
		<ul class="list0">
			<!--================================
			=            PRODUCTO 1            =
			=================================-->
			<li class="col-xs-12">
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
					<figure>
						<a href="#" class="pixelProducto" title="">
							<img src="<?php echo $servidor;?>Vistas/img/productos/accesorios/accesorio04.jpg" class="img-responsive">
						</a>
						
					</figure>
				</div>

				<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
					<h1>
						<small>
							<a href="#" class="pixelProducto" title="">Collar de diamantes</a>
						</small>
					</h1>
					<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
					<h2><small>GRATIS</small></h2>

					<div class="btn-group pull-left enlaces">
						<button type="button" class="btn btn-default btn-xs deseos" idProducto = "470" data-toggle = "tooltip" title = "agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
							
						</button>
						<a href="#" class="pixelProducto" title="" >
							<button type="button" class="btn btn-default btn-xs" data-toggle = "tooltip" title="ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>

				<div class="col-xs-12">
					<hr>
				</div>
			</li>
			<!--================================
			=            PRODUCTO 2            =
			=================================-->
			<li class="col-xs-12">
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
					<figure>
						<a href="#" class="pixelProducto" title="">
							<img src="<?php echo $servidor;?>Vistas/img/productos/accesorios/accesorio02.jpg" class="img-responsive">
						</a>
						
					</figure>
				</div>

				<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
					<h1>
						<small>
							<a href="#" class="pixelProducto" title="">Collar </a>
						</small>
					</h1>
					<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
					<h2><small>GRATIS</small></h2>

					<div class="btn-group pull-left enlaces">
						<button type="button" class="btn btn-default btn-xs deseos" idProducto = "470" data-toggle = "tooltip" title = "agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
							
						</button>
						<a href="#" class="pixelProducto" title="" >
							<button type="button" class="btn btn-default btn-xs" data-toggle = "tooltip" title="ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>

				<div class="col-xs-12">
					<hr>
				</div>
			</li>

			<!--================================
			=            PRODUCTO 3            =
			=================================-->
			<li class="col-xs-12">
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
					<figure>
						<a href="#" class="pixelProducto" title="">
							<img src="<?php echo $servidor;?>Vistas/img/productos/accesorios/accesorio05.jpg" class="img-responsive">
						</a>
						
					</figure>
				</div>

				<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
					<h1>
						<small>
							<a href="#" class="pixelProducto" title="">Producto 05</a>
						</small>
					</h1>
					<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
					<h2><small>GRATIS</small></h2>

					<div class="btn-group pull-left enlaces">
						<button type="button" class="btn btn-default btn-xs deseos" idProducto = "470" data-toggle = "tooltip" title = "agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
							
						</button>
						<a href="#" class="pixelProducto" title="" >
							<button type="button" class="btn btn-default btn-xs" data-toggle = "tooltip" title="ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>
				<div class="col-xs-12">
					<hr>
				</div>
			</li>

		</ul>
	</div>
</div>

<!--===============================================
=        BARRA DE PRODUCTOS MAS VENDIDOS          =
================================================-->
<div class="container-fluid well well-sm barraProductos">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 organizarProductos">
				<div class="btn-group pull-right">
					<button type="button" class="btn btn-default btnGrid" id="btnGrid1">
						<i class="fa fa-th"></i>
						 <span class="visible-sm visible-md visible-lg pull-right"> GRID</span>
					</button>

					<button type="button" class="btn btn-default btnList" id="btnList1">
						<i class="fa fa-list"></i>
						 <span class="visible-sm visible-md visible-lg pull-right"> LIST</span>
					</button>
				</div>
			</div>
		</div>
	</div>
	
</div> <!--====  End of BARRA DE PRODUCTOS GRATIS  ====<-->


<!--============================================
=            PRODUCTOS MAS VENDIDOS            =
=============================================-->
<div class="container-fluid productos">
	<div class="container">
		<div class="row">
			<!--======================================
			=            BARRA DE TITULOS            =
			=======================================-->
			<div class="col-xs-12 tituloDestacado">
				<div class="col-xs-12 col-sm-6">
					<h1><small>LO MÁS VENDIDOS</small> </h1>
				</div>
					<div class="col-xs-12 col-sm-6">
					<a href="lo-mas-vendido">
						<button class="btn btn-default backColor pull-right">VER MAS <span class="fa fa-chevron-right"></span> </button>
					</a>
				</div>
			</div>
			<div class="clearfix">
				
			</div>
			<hr>
		</div>
		<!--========================================================
		=            VITRINA DE PRODUCTOS EN CUADRICULA            =
		=========================================================-->
		<ul class="grid1" style="display: none;">
			<!--producto1-->
			<li class="col-md-3 col-sm-6 col-xs-12">
				<figure>
					<a href="#" title="" class="img-responsive pixelProducto">
						<img src="<?php echo $servidor;?>Vistas/img/productos/ropa/ropa04.jpg"  alt="">

					</a>
				</figure>

				<h4>
					<small>
					<a href="#" title="" class="pixelProducto">
						blusa azul <hr>
						<span class="label label-warning fontSize">Nuevo</span>
						<span class="label label-warning fontSize">4%</span>
					</a>
					</small>
				</h4>
				<div class="col-xs-6 precio">
					<h2>
						<small>
							<strong class="oferta">USD $290</strong>
						</small>
						<small>
							$11
						</small>
					</h2>
				</div>
				<div class="col-xs-6 enlaces">
					<div class="btn-group pull-right">
						
						<button type="button" class="btn btn-default btn-xs deseos" idProducto="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
						</button>

						<a href="#" title="" class="pixelProducto">
							<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>
			</li> 
			<!--FIN DE PRODUCTOS 1-->

			<!--producto2-->
			<li class="col-md-3 col-sm-6 col-xs-12">
				<figure>
					<a href="#" title="" class="img-responsive pixelProducto">
						<img src="<?php echo $servidor;?>Vistas/img/productos/ropa/ropa02.jpg"  alt="">

					</a>
				</figure>

				<h4>
					<small>
					<a href="#" title="" class="pixelProducto">
						polo <hr>
						<span class="label label-warning fontSize">Nuevo</span>
						<span class="label label-warning fontSize">4%</span>
					</a>
					</small>
				</h4>
				<div class="col-xs-6 precio">
					<h2>
						<small>
							<strong class="oferta">USD $270</strong>
						</small>
						<small>
							$11
						</small>
					</h2>
				</div>
				<div class="col-xs-6 enlaces">
					<div class="btn-group pull-right">
						
						<button type="button" class="btn btn-default btn-xs deseos" idProducto="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
						</button>

						<a href="#" title="" class="pixelProducto">
							<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>
			</li> 
			<!--FIN DE PRODUCTOS 2-->


			<!--producto3-->
			<li class="col-md-3 col-sm-6 col-xs-12">
				<figure>
					<a href="#" title="" class="img-responsive pixelProducto">
						<img src="<?php echo $servidor;?>Vistas/img/productos/ropa/ropa03.jpg"  alt="">

					</a>
				</figure>

				<h4>
					<small>
					<a href="#" title="" class="pixelProducto">
						vestido <hr>
						<span class="label label-warning fontSize">Nuevo</span>
						<span class="label label-warning fontSize">4%</span>
					</a>
					</small>
				</h4>
				<div class="col-xs-6 precio">
					<h2>
						<small>
							<strong class="oferta">USD $290</strong>
						</small>
						<small >
							$11
						</small>
					</h2>
				</div>
				<div class="col-xs-6 enlaces">
					<div class="btn-group pull-right">
						
						<button type="button" class="btn btn-default btn-xs deseos" idProducto="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
						</button>

						<a href="#" title="" class="pixelProducto">
							<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>
			</li> 
			<!--FIN DE PRODUCTOS 3-->

			<!--producto4-->
			<li class="col-md-3 col-sm-6 col-xs-12">
				<figure>
					<a href="#" title="" class="img-responsive pixelProducto">
						<img src="<?php echo $servidor;?>Vistas/img/productos/ropa/ropa06.jpg"  alt="">

					</a>
				</figure>

				<h4>
					<small>
					<a href="#" title="" class="pixelProducto">
						bikini 
						<hr>
						<br>
					</a>
					</small>
				</h4>
				<div class="col-xs-6 precio">
					<h2>
						<small>
							<strong class="oferta">USD $290</strong>
						</small>
						<small class="oferta">
							$11
						</small>
					</h2>
				</div>
				<div class="col-xs-6 enlaces">
					<div class="btn-group pull-right">
						
						<button type="button" class="btn btn-default btn-xs deseos" idProducto="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
						</button>

						<a href="#" title="" class="pixelProducto">
							<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>
			</li> 
			<!--FIN DE PRODUCTOS 4-->
		</ul>

		<!--========================================================
		=            VITRINA DE PRODUCTOS EN LISTA                 =
		=========================================================-->
		<ul class="list1">
			<!--================================
			=            PRODUCTO 1            =
			=================================-->
			<li class="col-xs-12">
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
					<figure>
						<a href="#" class="pixelProducto" title="">
							<img src="<?php echo $servidor;?>Vistas/img/productos/ropa/ropa03.jpg" class="img-responsive">
						</a>
						
					</figure>
				</div>

				<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
					<h1>
						<small>
							<a href="#" class="pixelProducto" title="">Collar de diamantes</a>

							<span class="label label-warning">Nuevo</span>
							<span class="label label-warning">4% off</span>
						</small>
					</h1>
					<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
					<h2>
						<small> <strong class="oferta">USD $29</strong>
						</small>
						<small>$11</small>
					</h2>

					<div class="btn-group pull-left enlaces">
						<button type="button" class="btn btn-default btn-xs deseos" idProducto = "470" data-toggle = "tooltip" title = "agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
							
						</button>
						<a href="#" class="pixelProducto" title="" >
							<button type="button" class="btn btn-default btn-xs" data-toggle = "tooltip" title="ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>

				<div class="col-xs-12">
					<hr>
				</div>
			</li>
		</ul>
	</div>
</div>



<!--===============================================
=        BARRA DE PRODUCTOS MAS VISTOS            =
================================================-->
<div class="container-fluid well well-sm barraProductos">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 organizarProductos">
				<div class="btn-group pull-right">
					<button type="button" class="btn btn-default btnGrid" id="btnGrid2">
						<i class="fa fa-th"></i>
						 <span class="visible-sm visible-md visible-lg pull-right"> GRID</span>
					</button>

					<button type="button" class="btn btn-default btnList" id="btnList2">
						<i class="fa fa-list"></i>
						 <span class="visible-sm visible-md visible-lg pull-right"> LIST</span>
					</button>
				</div>
			</div>
		</div>
	</div>
	
</div> <!--====  End of BARRA DE PRODUCTOS GRATIS  ====<-->


<!--============================================
=            PRODUCTOS MAS VENDIDOS            =
=============================================-->
<div class="container-fluid productos">
	<div class="container">
		<div class="row">
			<!--======================================
			=            BARRA DE TITULOS            =
			=======================================-->
			<div class="col-xs-12 tituloDestacado">
				<div class="col-xs-12 col-sm-6">
					<h1><small>LO MÁS VISTOS</small> </h1>
				</div>
					<div class="col-xs-12 col-sm-6">
					<a href="lo-mas-visto">
						<button class="btn btn-default backColor pull-right">VER MAS <span class="fa fa-chevron-right"></span> </button>
					</a>
				</div>
			</div>
			<div class="clearfix">
				
			</div>
			<hr>
		</div>
		<!--========================================================
		=      VITRINA DE PRODUCTOS MAS VISTOS  CUADRICULA         =
		=========================================================-->
		<ul class="grid2"  style="display: none;">
			<!--producto1-->
			<li class="col-md-3 col-sm-6 col-xs-12">
				<figure>
					<a href="#" title="" class="img-responsive pixelProducto">
						<img src="<?php echo $servidor;?>Vistas/img/productos/cursos/curso05.jpg"  alt="">

					</a>
				</figure>

				<h4>
					<small>
					<a href="#" title="" class="pixelProducto">
						curso de bootstrap <hr>
						<span class="label label-warning fontSize">4%</span>
					</a>
					</small>
				</h4>
				<div class="col-xs-6 precio">
					<h2>
						<small>
							<strong class="oferta">USD $100</strong>
						</small>
						<small>
							$10
						</small>
					</h2>
				</div>
				<div class="col-xs-6 enlaces">
					<div class="btn-group pull-right">
						
						<button type="button" class="btn btn-default btn-xs deseos" idProducto="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
						</button>

						<button type="button" class="btn btn-default btn-xs agregarCarrito" idProducto="404" imagen= "<?php echo $servidor;?>Vistas/img/productos/cursos/curso05.jpg" title="Curso de bootstrap" precio = "10" tipo="virtual" peso = "0" data-toggle="tooltip" title ="Agregar producto a carrito compras">
							<i class="fa fa-shopping-cart"></i>
						</button>

						<a href="#" title="" class="pixelProducto">
							<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>
			</li> 
			<!--FIN DE PRODUCTOS 1-->

			<!--producto2-->
			<li class="col-md-3 col-sm-6 col-xs-12">
				<figure>
					<a href="#" title="" class="img-responsive pixelProducto">
						<img src="<?php echo $servidor;?>Vistas/img/productos/cursos/curso02.jpg"  alt="">

					</a>
				</figure>

				<h4>
					<small>
					<a href="#" title="" class="pixelProducto">
						curso de JQuery <hr>
						<span class="label label-warning fontSize">4%</span>
					</a>
					</small>
				</h4>
				<div class="col-xs-6 precio">
					<h2>
						<small>
							<strong class="oferta">USD $100</strong>
						</small>
						<small>
							$10
						</small>
					</h2>
				</div>
				<div class="col-xs-6 enlaces">
					<div class="btn-group pull-right">
						
						<button type="button" class="btn btn-default btn-xs deseos" idProducto="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
						</button>

						<button type="button" class="btn btn-default btn-xs agregarCarrito" idProducto="404" imagen= "<?php echo $servidor;?>Vistas/img/productos/cursos/curso05.jpg" title="Curso de bootstrap" precio = "10" tipo="virtual" peso = "0" data-toggle="tooltip" title ="Agregar producto a carrito compras">
							<i class="fa fa-shopping-cart"></i>
						</button>

						<a href="#" title="" class="pixelProducto">
							<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>
			</li> 
			<!--FIN DE PRODUCTOS 1-->
			<!--producto1-->
			<li class="col-md-3 col-sm-6 col-xs-12">
				<figure>
					<a href="#" title="" class="img-responsive pixelProducto">
						<img src="<?php echo $servidor;?>Vistas/img/productos/cursos/curso04.jpg"  alt="">

					</a>
				</figure>

				<h4>
					<small>
					<a href="#" title="" class="pixelProducto">
						curso de html <hr>
						<span class="label label-warning fontSize">4%</span>
					</a>
					</small>
				</h4>
				<div class="col-xs-6 precio">
					<h2>
						<small>
							<strong class="oferta">USD $100</strong>
						</small>
						<small>
							$10
						</small>
					</h2>
				</div>
				<div class="col-xs-6 enlaces">
					<div class="btn-group pull-right">
						
						<button type="button" class="btn btn-default btn-xs deseos" idProducto="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
						</button>

						<button type="button" class="btn btn-default btn-xs agregarCarrito" idProducto="404" imagen= "<?php echo $servidor;?>Vistas/img/productos/cursos/curso05.jpg" title="Curso de bootstrap" precio = "10" tipo="virtual" peso = "0" data-toggle="tooltip" title ="Agregar producto a carrito compras">
							<i class="fa fa-shopping-cart"></i>
						</button>

						<a href="#" title="" class="pixelProducto">
							<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>
			</li> 
			<!--FIN DE PRODUCTOS 1-->
			<!--producto1-->
			<li class="col-md-3 col-sm-6 col-xs-12">
				<figure>
					<a href="#" title="" class="img-responsive pixelProducto">
						<img src="<?php echo $servidor;?>Vistas/img/productos/cursos/curso01.jpg"  alt="">

					</a>
				</figure>

				<h4>
					<small>
					<a href="#" title="" class="pixelProducto">
						curso de php <hr>
						<span class="label label-warning fontSize">4%</span>
					</a>
					</small>
				</h4>
				<div class="col-xs-6 precio">
					<h2>
						<small>
							<strong class="oferta">USD $100</strong>
						</small>
						<small>
							$10
						</small>
					</h2>
				</div>
				<div class="col-xs-6 enlaces">
					<div class="btn-group pull-right">
						
						<button type="button" class="btn btn-default btn-xs deseos" idProducto="470" data-toggle="tooltip" title="Agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
						</button>

						<button type="button" class="btn btn-default btn-xs agregarCarrito" idProducto="404" imagen= "<?php echo $servidor;?>Vistas/img/productos/cursos/curso05.jpg" title="Curso de bootstrap" precio = "10" tipo="virtual" peso = "0" data-toggle="tooltip" title ="Agregar producto a carrito compras">
							<i class="fa fa-shopping-cart"></i>
						</button>

						<a href="#" title="" class="pixelProducto">
							<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>
			</li> 
			<!--FIN DE PRODUCTOS 1-->
			
			<!--FIN DE PRODUCTOS 4-->
		</ul>

		<!--========================================================
		=      VITRINA DE PRODUCTOS MAS VISTOS  LISTA              =
		=========================================================-->
		<ul class="list2">
			<!--================================
			=            PRODUCTO 1            =
			=================================-->
			<li class="col-xs-12">
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
					<figure>
						<a href="#" class="pixelProducto" title="">
							<img src="<?php echo $servidor;?>Vistas/img/productos/cursos/curso05.jpg" class="img-responsive">
						</a>
						
					</figure>
				</div>

				<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
					<h1>
						<small>
							<a href="#" class="pixelProducto" title="">Curso de bootstrap</a>
							<span class="label label-warning">4% off</span>
						</small>
					</h1>
					<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
					<h2>
						<small> <strong class="oferta">USD $110</strong>
						</small>
						<small>$10</small>
					</h2>

					<div class="btn-group pull-left enlaces">
						<button type="button" class="btn btn-default btn-xs deseos" idProducto = "470" data-toggle = "tooltip" title = "agregar a mi lista de deseos">
							<i class="fa fa-heart"></i>
						</button>

						<button type="button" class="btn btn-default btn-xs agregarCarrito" idProducto = "470" imagen="http://localhost/backend/vistas/img/productos/cursos/curso05.jpg" titulo = "Curso de bootstrap" precio="10" tipo ="virtual" peso="0" data-toggle = "tooltip" title = "agregar al carrito de compras">
							<i class="fa fa-shopping-cart"></i>
						</button>	

						<a href="#" class="pixelProducto" title="" >
							<button type="button" class="btn btn-default btn-xs" data-toggle = "tooltip" title="ver producto">
								<i class="fa fa-eye"></i>
							</button>
						</a>
					</div>
				</div>

				<div class="col-xs-12">
					<hr>
				</div>
			</li>
		</ul>>
	</div>
</div>




