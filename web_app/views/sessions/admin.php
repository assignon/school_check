<?php
 session_start();
 //require " "
  require "../web_app/models/admin_model.php";



   if(isset($_GET['id']) AND $_GET['id'] > 0){

    $admin = new admin_model();

    $getID = intval($_GET['id']);
    $user_data = $admin->get_users_data('id',$getID,"admin");


     if( isset($_SESSION['id']) AND isset($user_data['id']) AND $_SESSION['id'] == $user_data['id']){

         require "../web_app/views/private/admin.php";
         //$admin->insert_student();
        // $admin->more_input();
        $admin->delete_school();
        $admin->display_school_grid();
        $admin->display_school_list();




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
