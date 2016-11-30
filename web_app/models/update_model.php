<?php

require "../web_app/core/model.php";
/**
 *
 */
class update_model extends model
{



  function __construct()
  {
      parent::__construct();
  }

  public function get_users_data($where,$id,$table_name){

      $req = $this->prepare_fetch("SELECT*FROM $table_name WHERE $where=?",[$id]);
      return $req;


   }

   public function update_school($update_id){


     if(isset($_POST['update'])){

       $school_name = htmlspecialchars($_POST['school_name']);
       $adress = htmlspecialchars($_POST['adress']);
       $street_number = $_POST['street_num'];
       $zip_code = htmlspecialchars($_POST['zip_code']);
       $district = htmlspecialchars($_POST['district']);
       $telephone = $_POST['tel'];
       $email = htmlspecialchars($_POST['email']);
       $web_site = htmlspecialchars($_POST['web_site']);
       $private = htmlspecialchars($_POST['private']);
       $concept = htmlspecialchars($_POST['concept']);
       $special = htmlspecialchars($_POST['special']);
       $basic = htmlspecialchars($_POST['basis']);
       //$update_id = $_POST['schoolUpdate_id'];

        $select = $this->prepare("SELECT*FROM schools WHERE id=?",array($update_id));
        //$update_select = $select->fetch();


           $this->prepare("UPDATE schools SET schoolname=?, adress=?, street_number=?, zipcode=?, district=?, telnr=?, email=?, website=?, private=?, concept=?, specials=?, basis=? WHERE id=?",
           array($school_name, $adress, $street_number, $zip_code,$district, $telephone, $email, $web_site, $private, $concept, $special, $basic,$update_id));

           $this->succes("Wijziging succes vol");



     }
   }


     public function select_school($schoolid){


        $select = $this->prepare("SELECT*FROM schools WHERE id=?", array($schoolid));

        while($school = $select->fetch()){

            ?>

               <script type="text/javascript">

                 window.addEventListener("load", function(){

                   var updateBox = document.querySelectorAll(".updateBox");

                   var windowH = window.pageYOffset;


                   var formulaire = document.querySelectorAll(".formulaire");

                   var schoolname = document.createElement("h3");
                   schoolname.className = "schoolName";
                   schoolname.innerHTML = "<?php echo str_replace("_"," ",$school['schoolname']);?>";


                     var schoolData0 = document.createElement("h3");
                     schoolnameclassName = "schoolData";

                     var schoolData1 = document.createElement("h3");
                     schoolnameclassName = "schoolData";

                     var schoolData2 = document.createElement("h3");
                     schoolnameclassName = "schoolData";

                     var schoolData3 = document.createElement("h3");
                     schoolnameclassName = "schoolData";

                     var schoolData4 = document.createElement("h3");
                     schoolnameclassName = "schoolData";

                     var schoolData5 = document.createElement("h3");
                     schoolnameclassName = "schoolData";

                     var schoolData6 = document.createElement("h3");
                     schoolnameclassName = "schoolData";

                     var schoolData7 = document.createElement("h3");
                     schoolnameclassName = "schoolData";

                     var schoolData8 = document.createElement("h3");
                     schoolnameclassName = "schoolData";

                     var schoolData9 = document.createElement("h3");
                     schoolnameclassName = "schoolData";

                     var schoolData10 = document.createElement("h3");
                     schoolnameclassName = "schoolData";







                     schoolData0.innerHTML = "Adress:  <?php echo $school['adress'];?>";
                     schoolData1.innerHTML = "Special:  <?php echo $school['specials'];?>";
                     schoolData2.innerHTML = "Straat-Nummer:  <?php echo $school['street_number'];?>";
                     schoolData3.innerHTML = "PostCode:  <?php echo $school['zipcode'];?>";
                     schoolData4.innerHTML = "Stadsdeel:  <?php echo $school['district'];?>";
                     schoolData5.innerHTML = "Telefoon Nummer:  <?php echo $school['telnr'];?>";
                     schoolData6.innerHTML = "Email:  <?php echo $school['email'];?>";
                     schoolData7.innerHTML = "Website:  <?php echo str_replace("_"," ",$school['website']);?>";
                     schoolData8.innerHTML = "Privee:  <?php echo $school['private'];?>";
                     schoolData9.innerHTML = "Concept:  <?php echo $school['concept'];?>";
                     schoolData10.innerHTML = "Basis:  <?php echo $school['basis'];?>";

                     formulaire[1].appendChild(schoolname);
                     formulaire[1].appendChild(schoolData0);
                     formulaire[1].appendChild(schoolData2);
                     formulaire[1].appendChild(schoolData3);

                     formulaire[3].appendChild(schoolData4);
                     formulaire[3].appendChild(schoolData5);
                     formulaire[3].appendChild(schoolData6);
                     formulaire[3].appendChild(schoolData7);

                     formulaire[5].appendChild(schoolData8);
                     formulaire[5].appendChild(schoolData9);
                     formulaire[5].appendChild(schoolData1);
                     formulaire[5].appendChild(schoolData10);

                     //formulaireappendChild(schoolDataArr);
                     updateBox[0].appendChild(formulaire[1]);
                     updateBox[1].appendChild(formulaire[3]);
                     updateBox[2].appendChild(formulaire[5]);

                     var updateData = document.querySelectorAll(".updateInput");
                     //var concept = document.getElementById("concepts").value;
                     //var special = document.getElementById("specials").value;
                     //var basis = document.getElementById("basis").value;



                     updateData[0].value = "<?php echo $school['schoolname'];?>";

                     //var adress = document.getElementById("adress").value;
                     updateData[1].value = "<?php echo $school['adress'];?>";

                     //var streetNumber = document.getElementById("streetNumber").value;
                    updateData[2].value = "<?php echo $school['street_number'];?>";

                     //var telNumber = document.getElementById("telNumber").value;
                     updateData[3].value = "<?php echo $school['zipcode'];?>";

                     //var zipcode = document.getElementById("zipcode").value;
                     updateData[4].value = "<?php echo $school['district'];?>";

                     //var district = document.getElementById("district").value;
                    updateData[5].value = "<?php echo $school['telnr'];?>";

                     //var email = document.getElementById("email").value;
                     updateData[6].value = "<?php echo $school['email'];?>";

                     //var webSite = document.getElementById("webSite").value;
                     updateData[7].value = "<?php echo $school['website'];?>";

                     //var email = document.getElementById("email").value;
                     updateData[8].value = "<?php echo $school['private'];?>";

                     //var privat = document.getElementById("private").value;
                     updateData[9].value = "<?php echo $school['concept'];?>";

                     //var concept = document.getElementById("concept").value;
                     updateData[10].value = "<?php echo $school['specials'];?>";

                     updateData[11].value = "<?php echo $school['basis'];?>";

                     //var special = document.getElementById("special").value;
                     //special = "<?php //echo $school['specials'];?>";

                     //var basic = document.getElementById("basic").value;
                     //asis = "<?php// echo $school['basis'];?>";

                     //updateId.value = "<?php echo $school['id'];?>";





                 })

                   </script>
                   <?php

                 }

               }


   }




 ?>
