<?php

class Application_Model_Reproyecmapper
{
	public function save($model);
	public function find($idproyecto,$model);
	public function fetchAll();

	protected $_dbTable;
	
	public function setDbTable($dbTable)
	{
		if(is_string($dbTable))
		{
			$dbTable=new $dbTable();
		}
		if(!$dbTable instanceof Zend_Db_Table_Abstract)
		{
			throw new Exception('invalid table data');
		}
		$this->_dbTable=$dbTable;
		return $this;
	}
	public function getDbTable()
	{
		if(null===$this->dbTable)
		{
			$this->setDbTable('Application_Model_DbTable_Pro');

		}
		return $this->_dbTable;
	}
	public function save(Application_Model_Reproyec $proyecto )
	{
		$data=$array(
	'nombre'=>$proyecto->getnombre(),
	'tipo'=>$proyecto->gettipo(),
	'fini'=>date('d-m-Y'),
	'fter'=>date('d-m-Y'),
		);
		if(null===($idproyecto=$proyecto->getidproyecto()))
		{
			unset($data['idproyecto']);
			$this->getDbTable()->insert($data);
		}
		else
		{
			$this->getDbTable()->update($data,array('idproyecto=?'=>$idproyecto));
		}
	}
	public function find($idproyecto, Application_Model_Reproyec $proyecto)
	{
		$result=$this->getDbTable()->find($idproyecto);
		if(0==count($result))
		{
			return ;
		}
		$row=$result->current();
		$proyecto->setidproyecto($row->idproyecto)
		->setnombre($row->nombre)
		->settipo($row->tipo)
		->setfini($row->fini)
		->setfter($row->fter);

	}

	public function fetchAll()
	{
		$resulSet=$this->getDbTable()->fetchAll();
		$entries=array();
		foreach ($resulSet as $row)
		{
			$entry=new Application_Model_Reproyec();
			$entry->setidprpyecto($row->idproyecto)
			->setnombre($row->nombre)
			->settipo($row->tipo)
			->setfini($row->fini)
			->setfter($row->fter);
			$entries[]=$entry;
				

		}
		return $entries;
	}
	
}
