<?php

 namespace Album\Form;

 use Zend\Form\Form;

 class AlbumForm extends Form
 {
     public function __construct($name = null)
     {
         // we want to ignore the name passed
         parent::__construct('album');
         $this->setAttribute("class", "form-horizontal");
         
         $this->add(array(
             'name' => 'id',
             'type' => 'Hidden',
         ));
         
         $this->add(array(
             'name' => 'title',
             'type' => 'Text',
             'attributes' => array(
                 'class' => 'form-control'
             ),
             'options' => array(
                 'label' => 'Title',
             ),
         ));
         
         $this->add(array(
             'name' => 'profile',
             'type' => 'Text',
             'attributes' => array(
                 'class' => 'form-control'
             ),
             'options' => array(
                 'label' => 'Image'
             )
         ));
         
         $this->add(array(
             'name' => 'artist',
             'type' => 'Text',
             'attributes' => array(
                 'class' => 'form-control'
             ),
             'options' => array(
                 'label' => 'Artist',
             ),
         ));
         
         $this->add(array(
             'name' => 'submit',
             'type' => 'Submit',
             'attributes' => array(
                 'class' => 'btn btn-success',
                 'value' => 'Go',
                 'id' => 'submitbutton',
             ),
         ));
     }
 }