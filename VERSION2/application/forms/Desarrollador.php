<?php

class Application_Form_Desarrollador extends Zend_Form
{

    public function init()
    {
    	$this->addElement('text','iddesarrollador',
       array('required'=>true,'label'=>'iddesarrollador','class'=>' h_20 grid_1 '));

       $this->addElement('text','nombre',
       array('required'=>true,'label'=>'Nombre','class'=>'h_28 grid_2 top_3 '));
       
        $this->addElement('submit','submit',
       array('required'=>true,'label'=>'Registrar','class'=>'h_5 grid_2 top_18 push_20'));
       
        /* Form Elements & Other Definitions Here ... */
    }


}

