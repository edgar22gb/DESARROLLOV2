<?php

class Application_Form_Recursos extends Zend_Form
{

    public function init()
    {
        $this->addElement('text','idrecurso',
       array('required'=>true,'label'=>'ID','class'=>' h_30 grid_2 '));

       $this->addElement('text','nombre',
       array('required'=>true,'label'=>'Nombre','class'=>'h_30 grid_2 '));
       
       $this->addElement('text','version',
       array('required'=>true,'label'=>'Version','class'=>'h_30 grid_2 '));
       
        $this->addElement('submit','submit',
       array('required'=>true,'label'=>'Registrar','class'=>'h_30 grid_2 top_18 '));
       
        /* Form Elements & Other Definitions Here ... */
    }


}

