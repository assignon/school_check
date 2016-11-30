<?php


 session_start();
 //require " "
  require "../web_app/models/add_model.php";



   if(isset($_GET['id']) AND $_GET['id'] > 0){

    $add = new add_model();

    $getID = intval($_GET['id']);
    $user_data = $add->get_users_data('id',$getID,"admin");


     if( isset($_SESSION['id']) AND isset($user_data['id']) AND $_SESSION['id'] == $user_data['id']){

         require "../web_app/views/private/add.php";

         $add->add_school();
         $add->display_field();
         $add->add_field();


       }else{

          echo "U hebt geen toegaan tot deze pagine! Graag account aanmaken";
          ?>
              <a href="login">Login page</a>
          <?php

       }


   }else{

      echo "This id bestaat niet";

   }



 ?>
