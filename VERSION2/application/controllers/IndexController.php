<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {

		/* Initialize action controller here */
    }

    public function indexAction()
    {
		//h action body
    }

    public function addshellAction()
    {
		$frmarea = new Application_Form_Shell();


		if ($this->getRequest()->isPost())
		{
			if ($frmarea->isValid($this->_getAllParams()))
			{
				$Id=$frmarea->getElement('Id')->getValue();
				$this->view->id=$Id;
			}
				
			else
			{
				
			}
		}


		$this->view->textarea=$frmarea; // action body



    }

    public function desarrolladorAction()
    {
    	$frmDes=new Application_Form_Desarrollador();
    	if ($this->getRequest()->isPost())
    	{
    		if ($frmDes->isValid($this->_getAllParams()))
    		{
    			$desarrollo=new Application_Model_Desarrollador();
    			$desarrollo->regdes($frmDes->getValues());
    			//$model= new Application_Model_Desarrollador();
    			echo 'registrado';
    		}
    		else
    		{
    		}

    	}
    	$this->view->frmDes=$frmDes;

    		
    	// action body
    }

    public function recursosAction()
    {
		$frmrec=new Application_Form_Recursos();
    	if ($this->getRequest()->isPost())
    	{
    		if ($frmrec->isValid($this->_getAllParams()))
    		{
    			$recu=new Application_Model_Regrecurso();
    			$recu->regRecurso($frmrec->getValues());
    			//$model= new Application_Model_Desarrollador();
    			echo 'registrado';
    		}
    		else
    		{
    		}

    	}
    			$this->view->frmRec=$frmrec;
		// action body
    }

    public function addversionAction()
    {
		$frmvers=new Application_Form_Version();
    	if ($this->getRequest()->isPost())
    	{
    		if ($frmvers->isValid($this->_getAllParams()))
    		{
    			$ver=new  Application_Model_Versiones();
    			$ver->regversion($frmvers->getValues());
    			//$model= new Application_Model_Desarrollador();
    			echo 'registrado';
    		}
    		else
    		{
    		}

    	}
    			$this->view->frmversion=$frmvers;
		// action body
    }

    public function addclienteAction()
    {
    		$frmclie=new  Application_Form_Cliente();
    	if ($this->getRequest()->isPost())
    	{
    		if ($frmclie->isValid($this->_getAllParams()))
    		{
    			$clien=new  Application_Model_Clientes();
    			$clien->addclien($frmclie->getValues());
    			//$model= new Application_Model_Desarrollador();
    			echo 'registrado';
    		}
    		else
    		{
    		}

    	}			
		$this->view->frmcliente=$frmclie;
		// action body
    }

    public function reproAction()
    {
    $frmproye=new Application_Form_Registraproyecto();
    	if ($this->getRequest()->isPost())
    	{
    		if ($frmproye->isValid($this->_getAllParams()))
    		{
    			$pro=new  Application_Model_Reproyec();
    			$pro->regPro($frmproye->getValues());
    			//$model= new Application_Model_Desarrollador();
    			echo 'registrado';
    			
    		}
    		else
    		{
    		}

    	}
		
    	$this->view->frmproye=$frmproye;
    	// action body
    }

    public function verproyectosAction()
    {

        //echo "rsan";
    	// action body
    }

    public function consultaDesaAction()
    {
    	//echo "hola";
        // action body
    }

    public function consultaRecuAction()
    {
        // action body
    }

    public function consultaVersAction()
    {
        // action body
    }

    public function consultaClienAction()
    {
        // action body
    }


}




    	





































