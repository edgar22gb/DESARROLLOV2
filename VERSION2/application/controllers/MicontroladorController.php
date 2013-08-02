<?php

class MicontroladorController extends Zend_Controller_Action
{

    public function init()
    {
    	$this->initView();  
        $this->view->baseUrl = $this->_request->getBaseUrl();  
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    	 $this->view->saludo = "hola a todos!!";  
        // action body
    }


}

