<?php

  require "../web_app/core/controller.php";
  class welcom extends controller{

   public function __construct()
    {
       parent::__construct();
    }

    public function login(){

      $this->view('view')->render("login");

    }

    public function admin(){

      $this->view('view')->render("admin");

    }


  }

 ?>
