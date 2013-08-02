<?php

class Application_Model_Desarrollador
{
	public  function regdes($array)
	{
		$dbTable = new Application_Model_DbTable_Desarrolladores();
		$dbTable->insert($array);
	}

	public function verdesarrolladores()
	{
		$dbTable = new Application_Model_DbTable_Desarrolladores();
		$result=$dbTable->fetchAll();
		return $result;
	}
		
		
}

