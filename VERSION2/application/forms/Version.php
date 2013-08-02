<?php

class Application_Form_Version extends Zend_Form
{

    public function init()
    {
        
    	$this->addElement('text','idversion',
       array('required'=>true,'label'=>'ID','class'=>' h_30 grid_2 top_3'));

       $this->addElement('text','nombre',
       array('required'=>true,'label'=>'Nombre','class'=>'h_30 grid_3 top_3'));
       
        $this->addElement('submit','submit',
       array('required'=>true,'label'=>'Registrar','class'=>'h_30 grid_2 top_4'));
       
        /* Form Elements & Other Definitions Here ... */
    }


}

