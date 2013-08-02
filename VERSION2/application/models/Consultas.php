<?php

class Application_Model_Consultas
{
	public function verproyectos();
	{
		$tablaproyecto=new Application_Model_DbTable_Pro();
		$resul=$tablaproyecto->fetchAll();
		//return $result;
	return $resul;
	}
/*	public function getproyectos($idproyecto)
	{
		$tablaproyecto=new Application_Model_DbTable_Pro();
		$resultado=$tablaproyecto->find($idproyecto)->current();
		return $resultado;
	}
*/
	
}

