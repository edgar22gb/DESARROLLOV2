<?php

class Application_Model_Reproyec
{

	public  function regPro($array)
	{
		$dbTable = new Application_Model_DbTable_Pro();
		$dbTable->insert($array);
	}
	public function verpro()
	 {
		$dbTable = new Application_Model_DbTable_Pro();
		$result=$dbTable->fetchAll();
		return $result;
	}

}

