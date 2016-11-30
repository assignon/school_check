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

    public function add(){

      $this->view('view')->render("add");

    }


    public function update(){

      $this->view('view')->render("update");

    }


    public function gegevens(){

      $this->view('view')->render("gegevens");

    }



  }

 ?>
