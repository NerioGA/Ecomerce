<?php 

/**
 * 
 */
	class ControladorPlantilla
	{
		
		/*=============================================
		=            LLAMAMOS A LA PLANTILLA            =
		=============================================*/
	 	public function Plantilla()
	 	{
	 		include "Vistas/plantilla.php";
	 	}

	 	/*=================================================================
	 	=            TRAEMOS ESTILOS DINAMICOS DE LA PLANTILLA            =
	 	=================================================================*/
	 	public function ctrEstiloPlantilla(){
	 		$tabla = "Plantilla";

	 		$respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);

	 		return $respuesta;
	 	}
	 	
	 	
	 	/*=====  End of TRAEMOS ESTILOS DINAMICOS DE LA PLANTILLA  ======*/
	 	
	}
 ?>