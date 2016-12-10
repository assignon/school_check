<?php

   //require "../web_app/core/app.php";
   //require "../includes/files_include.php";
   //$include = new includes();
   //$app = new app();

   require "../web_app/core/controller.php";
   //require "view.php";

   $app = new controller ;

   if(isset($_GET['action'])){

     $action = $_GET['action'];



   if($action == ""){

     $app->view('view')->render("login");

   }else if($action == 'login'){

     $app->view('view')->render("login");
     //require "../web_app/views/private/login.php";

   }else if($action == 'admin'){

     $app->view('view')->render("admin");

   }else if($action == 'add'){

     $app->view('view')->render("add");

   }else if($action == 'update'){

     $app->view('view')->render("update");

   }else if($action == 'datacheck'){

     $app->view('view')->render("gegevens");

   }else if($action == 'logout'){

     $app->view('view')->render("logout");

   }

 }





 ?>
