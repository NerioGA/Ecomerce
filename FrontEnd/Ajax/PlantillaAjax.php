
<?php 

require_once "../Controlador/PlantillaControlador.php";
require_once "../Model/PlantillaModelo.php";

/**
 * clase para ajax plantilla
 */
class AjaxPlantilla
{
	

	public function ajaxEstiloPlantilla(){
		 $respuesta = ControladorPlantilla::ctrEstiloPlantilla();

		echo json_encode($respuesta);
	}
}

$objeto = new AjaxPlantilla();

$objeto ->ajaxEstiloPlantilla();

 ?>