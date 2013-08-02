<?php

class Application_Form_Registraproyecto extends Zend_Form
{

    public function init()
    {
       $this->addElement('text','idproyecto',
       array('required'=>true,'label'=>'idproyecto','class'=>' h_30 grid_2'));

       $this->addElement('text','nombre',
       array('required'=>true,'label'=>'Nombre','class'=>'h_30 grid_2'));
       
       $this->addElement('text','tipo',
       array('required'=>true,'label'=>'Tipo','class'=>'h_30 grid_2'));
       
       $this->addElement('text','finicio',
       array('required'=>true,'label'=>'Fecha Inicio','class'=>'h_30 grid_2'));
       
       $this->addElement('text','ftermino',
       array('required'=>true,'label'=>'Fecha Termino','class'=>'h_30 grid_2'));
       
       $this->addElement('submit','submit',
       array('required'=>true,'label'=>'Registrar','class'=>'h_18 grid_2 top_18'));
       
       
              
       /* Form Elements & Other Definitions Here ... */
    }
    	
        /* Form Elements & Other Definitions Here ... */

}

