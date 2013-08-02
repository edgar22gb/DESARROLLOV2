<?php

class Application_Form_Cliente extends Zend_Form
{

    public function init()
    {
    	$this->addElement('text','idcliente',
       array('required'=>true,'label'=>'ID','class'=>' h_30 grid_1push_1 '));

       $this->addElement('text','nombre',
       array('required'=>true,'label'=>'Nombre','class'=>'h_30 grid_2 top_10push_1'));
       
		$this->addElement('text','direccion',
       array('required'=>true,'label'=>'Direccion','class'=>'h_30 grid_2 top_10push_1'));
       
       $this->addElement('text','telefono',
       array('required'=>true,'label'=>'Telefono','class'=>'h_30 grid_2'));
       
         $this->addElement('submit','submit',
       array('required'=>true,'label'=>'Registrar','class'=>'h_30 grid_2 top_18'));
       
       /* Form Elements & Other Definitions Here ... */
    }


}

