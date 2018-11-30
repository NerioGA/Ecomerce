<?php 
	require_once "Controlador/PlantillaControlador.php";
	require_once "Controlador/ProductosControlador.php";
	require_once "Controlador/SlideControlador.php";


	require_once "Model/PlantillaModelo.php";
	require_once "Model/ProductosModelo.php";
	require_once "Model/SlideModelo.php";

	require_once "Model/rutas.php";


	$platilla = new ControladorPlantilla();

	$platilla -> Plantilla();

 ?>