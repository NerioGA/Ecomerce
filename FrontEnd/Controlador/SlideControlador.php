
<?php 

	/**
	 * CLASE PARA CONTROLADOR SLIDE
	 */
	class ControladorSlide
	{
		
		public function ctrMostrarSlide(){
			$tabla = "slide";

			$respuesta = ModeloSlide::mdlMostrarSlide($tabla);

			return $respuesta;
		}
	}
 ?>