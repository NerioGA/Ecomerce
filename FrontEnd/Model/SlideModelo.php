<?php 

	/**
	 * CLASE PARA MODELO STATE
	 */
	require_once "Conexion.php";

	class ModeloSlide
	{
		
		static public function mdlMostrarSlide($tabla){

			$stm = Conexion::conectar() ->prepare("SELECT *FROM $tabla");

			$stm ->execute();

			return $stm -> fetchAll();

			$stm -> close();

			$stm = null;
		}
	}

 ?>