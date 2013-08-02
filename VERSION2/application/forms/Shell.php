<?php

class Application_Form_Shell extends Zend_Form
{

    public function init()
    {
       $this->addElement('text','Id',
       array('required'=>true,'label'=>'Introduce un comando','class'=>'grid_5'
      
             
       ));
        $this->addElement('submit','submit',
       array('required'=>true,'label'=>'Ejecutar','class'=>'h_30 grid_4 top_15'));

 
    	/* Form Elements & Other Definitions Here ... */
    }


}

