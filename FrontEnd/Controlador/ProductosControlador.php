<?php 

/**
 * PARA EL CONTROLADOR DE PRODUCTOS
 */
class ControladorProductos
{
	/*=========================================
	=            MOSTAR CATEGORIAS            =
	=========================================*/
	static public function crtMostrarCategorias($item, $valor){
		$tabla = "categorias";
		$respuesta = ModeloProductos::mdlMostarCategorias($tabla, $item, $valor);

		return $respuesta;
	}
	
	/*=====  End of MOSTAR CATEGORIAS  ======*/
	
	/*=============================================
	=            MOSTRAR SUBCATEGORIAS            =
	=============================================*/
	static public function crtMostrarSubCategorias($item, $valor)
	{
		$tabla = "subcategoria";
		$respuesta = ModeloProductos::mdlMostarSubCategorias($tabla, $item, $valor);

		return $respuesta;
	}
	/*=====  End of MOSTRAR SUBCATEGORIAS  ======*/

	/*=========================================
	=            MOSTRAR PRODUCTOS            =
	=========================================*/
	static public function crtMostrarProductos($ordenar)
	{
		$tabla = "productos";
		$respuesta = ModeloProductos::mdlMostarProductos($tabla, $ordenar);
		return $respuesta;
	}
	
	
	/*=====  End of MOSTRAR PRODUCTOS  ======*/
	


}




 