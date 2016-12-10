<?php

   session_start();

   require "../web_app/models/gegevens_model.php";



    if(isset($_GET['id']) AND $_GET['id'] > 0){

     $gegevens = new gegevens_model();

     $getID = intval($_GET['id']);
     $user_data = $gegevens->get_users_data('id',$getID,"admin");


      if( isset($_SESSION['id']) AND isset($user_data['id']) AND $_SESSION['id'] == $user_data['id']){

          require "../web_app/views/private/gegevens.php";


          if(isset($_GET['schoolname']) AND !empty($_GET['schoolname'])){

              $school_name = htmlspecialchars($_GET['schoolname']);

          }

          $gegevens->display_schools($school_name);
          //$gegevens->display_online();

       }else{

          echo "U hebt geen toegaan tot deze pagine! Graag account aanmaken";
          ?>
              <a href="login">Login page</a>
          <?php

       }


   }else{

      echo "This id bestaat niet";

    //  $this->prepare("INSERT INTO schools(schoolname, adress, zipcode, district, telnr, email, website, openday, openclass, infonight, private, level, concept, specials, tto, sports, tech, spanish, vso, vmbob, vmbok, vmbot, havo, vwo, gymnasium, basis, art) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
    //  array('Alex_Grah_Bellschool_Orion_College_West','Zekeringstraat45','1014BP','Amsterdam',206111213,'orioncollegewest@orion_nl','orioncollege_orion_nl\locatie_west_3_4','n','n','n','n','Vso','standaard','Speciaal_onderwijs','n','n','n','n','Y','n','n','n','n','n','n','openbaar','n'));


   }


 ?>
