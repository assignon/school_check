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

         $update->update_school($update_id, $update_name);
         $update->select_school($update_id);

         $update->display_open_day($update_name);
         $update->display_open_class($update_name);
         $update->display_night_information($update_name);
         $update->visit('open_day',$update_name,'date_openday','time_openday',0,1,11,5);
         $update->visit('open_class',$update_name,'date_openclass','time_openclass',2,3,13,6);
         $update->visit('info_night',$update_name,'date_infonight','time_infonight',4,5,15,7);
         $update->updateLevels($update_name,'levels_data','levels_name');
         $update->updateLevels($update_name,'add_levels','level_value');






       }else{

          echo "U hebt geen toegaan tot deze pagine! Graag account aanmaken";
          ?>
              <a href="welcom.php?action=login">Login page</a>
          <?php

       }


   }else{

      echo "This id bestaat niet";

   }



 ?>
