<?php

class Application_Model_Clientes
{
	public function addclien($array)
	{
		$Tablecliente=new Application_Model_DbTable_Clientes();
		$Tablecliente->insert($array);
	}
	public function verClientes()
	{
		$dbTable= new Application_Model_DbTable_Clientes();
		$result=$dbTable->fetchAll();
		return  $result;
	}

}

