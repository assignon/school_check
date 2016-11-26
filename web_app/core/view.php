<?php

  class view{

   public function __construct()
    {

    }


    public function render($file_name){

       require "../web_app/views/sessions/".$file_name.".php";

    }

  }

 ?>
