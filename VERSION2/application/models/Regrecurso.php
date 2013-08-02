<?php

class Application_Model_Regrecurso
{
	
	public function regRecurso($array)
	{
		$dbTable=new Application_Model_DbTable_Recurso();
		$dbTable->insert($array);
	}
	public function recuersos()
	{
		$dbTable = new Application_Model_DbTable_Recurso();
		$result=$dbTable->fetchAll();
		return $result;
	}

}

