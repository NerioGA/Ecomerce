
<?php 
require_once "Conexion.php";

/**
 * PARA EL MODELO DE PRODUCTOS
 */

class ModeloProductos
{
	/*==========================================
	=            MOSTRAR CATEGORIAS            =
	==========================================*/
	
	 static public function mdlMostarCategorias($tabla, $item, $valor){

	 	if($item != null){

	 		$stmt = Conexion::conectar() ->prepare("SELECT *FROM $tabla WHERE $item=:$item");

	 		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

	 		$stmt ->execute();

	 		return $stmt ->fetch();

	 	}
	 	else{

		 	$stmt = Conexion::conectar() -> prepare("SELECT *FROM $tabla");

		   	$stmt -> execute();

		   	return $stmt -> fetchAll();

	 	}

	   	$stmt -> close();

	   	$stmt = null;
	}
	
	/*=====  End of MOSTRAR CATEGORIAS  ======*/
	
	/*=============================================
	=            MOSTRAR SUBCATEGORIAS            =
	=============================================*/
	static public function mdlMostarSubCategorias($tabla, $item, $valor){

		$stmt = Conexion::conectar() -> prepare("SELECT *FROM $tabla WHERE $item = :$item");

		$stmt ->bindParam(":".$item, $valor, PDO::PARAM_INT);

	   	$stmt -> execute();

	   	return $stmt -> fetchAll();

	   	$stmt -> close();
	}
	/*=====  End of MOSTRAR SUBCATEGORIAS  ======*/

	
	/*=========================================
	=            MOSTRAR PRODUCTOS            =
	=========================================*/
	public function mdlMostarProductos($tabla, $ordenar)
	{
		//$stmt = Conexion::conectar() -> prepare("SELECT *FROM $tabla WHERE $item = :$item");

		$stmt = Conexion::conectar() -> prepare("SELECT *FROM $tabla ORDER BY $ordenar LIMIT 4");

		//$stmt ->bindParam(":".$item, $valor, PDO::PARAM_INT);

	   	$stmt -> execute();

	   	return $stmt -> fetchAll();

	   	$stmt -> close();
	}
	/*=====  End of MOSTRAR PRODUCTOS  ======*/
	
}

 

