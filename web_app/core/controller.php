<?php

  class controller{

   public function __construct()
    {

       require "view.php";
       //require "model.php";

    }

   public function view($class_name){

     return new $class_name;

  }

}

 ?>
