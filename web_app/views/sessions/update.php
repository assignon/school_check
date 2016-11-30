<?php


 session_start();
 //require " "
  require "../web_app/models/update_model.php";



   if(isset($_GET['id']) AND $_GET['id'] > 0){

    $update = new update_model();

    $getID = intval($_GET['id']);
    $user_data = $update->get_users_data('id',$getID,"admin");


     if( isset($_SESSION['id']) AND isset($user_data['id']) AND $_SESSION['id'] == $user_data['id']){

         require "../web_app/views/private/update.php";

         if(isset($_GET['schoolid']) AND $_GET['schoolid'] > 0){

             $update_id = intval($_GET['schoolid']);

         }

         if(isset($_GET['schoolname']) AND !empty($_GET['schoolname'])){

             $update_name = htmlspecialchars($_GET['schoolname']);


         }

         $update->update_school($update_id);
         $update->select_school($update_id);






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
