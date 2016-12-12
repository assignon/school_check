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

   public function update_school($update_id,$update_name){


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
       $tto = htmlspecialchars($_POST['tto']);
       $sport = htmlspecialchars($_POST['sport']);
       $tech = htmlspecialchars($_POST['tech']);
       $spanish = htmlspecialchars($_POST['spanish']);
       $art = htmlspecialchars($_POST['art']);

       /*$openday_date = htmlspecialchars($_POST['dag_date']);
       $openday_time = htmlspecialchars($_POST['dag_time']);

       $openclass_date = htmlspecialchars($_POST['class_date']);
       $openclass_time = htmlspecialchars($_POST['class_time']);

       $infonight_date = htmlspecialchars($_POST['info_date']);
       $infonight_time = htmlspecialchars($_POST['info_time']);
       $infonight_select = htmlspecialchars($_POST['kind_parent']);
       //$update_id = $_POST['schoolUpdate_id'];*/

        $select = $this->getPDO()->prepare("SELECT*FROM open_day");
        $openday_select = $select->fetch();


           $this->prepare("UPDATE schools SET schoolname=?, adress=?, street_number=?, zipcode=?, district=?, telnr=?, email=?, website=?, private=?, concept=?, specials=?, basis=?, tto=?, sport=?, spanish=?, technologie=?, art=? WHERE id=?",
           array($school_name, $adress, $street_number, $zip_code,$district, $telephone, $email, $web_site, $private, $concept, $special, $basic,$tto,$sport,$spanish,$tech,$art,$update_id));

           $this->prepare("UPDATE online SET schoolname=?, adress=?, street_number=?, zipcode=?, district=?, telnr=?, email=?, website=?, private=?, concept=?, specials=?, basis=?, tto=?, sport=?, spanish=?, technologie=?, art=? WHERE schoolname=?",
           array($school_name, $adress, $street_number, $zip_code,$district, $telephone, $email, $web_site, $private, $concept, $special, $basic,$tto,$sport,$spanish,$tech,$art,$update_name));

           //$this->prepare("UPDATE open_day SET date_openday=?, time_openday=? WHERE school_name=?,id=? ",
           //array($openday_date, $openday_time, $update_name, $openday_select['id']));

           //$this->prepare("UPDATE open_class SET date_openclass=?, time_openclass WHERE school_name=?",
           //array($openclass_date, $openclass_time ,$update_name));

           //$this->prepare("UPDATE info_night SET date_infonight=?, time_infonight, parents_kind WHERE school_name=?",
           //array($infonight_date, $infonight_time, $infonight_select, $update_name));


           $this->succes("Wijziging succes vol");



     }
   }

   /***********************************************************************************************************************************************************/

   /**********************************************************************************************************************************************************/


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

                     var schoolData11 = document.createElement("h3");
                     schoolnameclassName = "schoolData";

                     var schoolData12 = document.createElement("h3");
                     schoolnameclassName = "schoolData";

                     var schoolData13 = document.createElement("h3");
                     schoolnameclassName = "schoolData";

                     var schoolData14 = document.createElement("h3");
                     schoolnameclassName = "schoolData";

                     var schoolData15 = document.createElement("h3");
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
                     schoolData11.innerHTML = "TTO:  <?php echo $school['tto'];?>";
                     schoolData12.innerHTML = "Sport:  <?php echo $school['sport'];?>";
                     schoolData13.innerHTML = "Spanish:  <?php echo $school['spanish'];?>";
                     schoolData14.innerHTML = "Technologie:  <?php echo $school['technologie'];?>";
                     schoolData15.innerHTML = "Kunst:  <?php echo $school['art'];?>";

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

                     formulaire[7].appendChild(schoolData11);
                     formulaire[7].appendChild(schoolData12);
                     formulaire[7].appendChild(schoolData13);
                     formulaire[7].appendChild(schoolData14);
                     formulaire[7].appendChild(schoolData15);

                     //formulaireappendChild(schoolDataArr);
                     updateBox[0].appendChild(formulaire[1]);
                     updateBox[1].appendChild(formulaire[3]);
                     updateBox[2].appendChild(formulaire[5]);
                     updateBox[3].appendChild(formulaire[7]);

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

                     updateData[12].value = "<?php echo $school['tto'];?>";

                     updateData[13].value = "<?php echo $school['sport'];?>";

                     updateData[14].value = "<?php echo $school['spanish'];?>";

                     updateData[15].value = "<?php echo $school['technologie'];?>";

                     updateData[16].value = "<?php echo $school['art'];?>";

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


               /*************************************************************************************************************************************************/
               /*******************************************************************************************************************************************************/


               public function updateLevels($schoolname,$tablename,$level_row){


                  $select = $this->prepare("SELECT*FROM $tablename WHERE school_name=?", array($schoolname));
                  while($display_level = $select->fetch()){

                    if(isset($_POST['update'])){


                      $this->prepare("UPDATE $tablename SET $level_row=? WHERE id=?", array($_POST[$display_level[$level_row]],$display_level['id']));


                    }

                    ?>

                       <script type="text/javascript">

                          window.addEventListener("load", function(){

                             var updateLevel = document.getElementById("updateLevels");
                             var inputLevel = document.getElementById("levelsInput");
                             var levelData = document.getElementById("levelsData");

                             var input = document.createElement("input");
                             input.type = "text";
                             input.name = "<?php echo $display_level[$level_row];?>";
                             input.value = "<?php echo $display_level[$level_row];?>";



                             var levelVal = document.createElement("h3");
                             levelVal.className = "schoolData";
                             levelVal.innerHTML = "<?php echo $display_level[$level_row];?>";

                             inputLevel.appendChild(input);
                             levelData.appendChild(levelVal);



                          })

                       </script>

                    <?php


                  }


               }


/************************************************************************************************************************************************************/

/***********************************************************************************************************************************************************/

                  public function display_open_day($schoolname){


                    //$select = $this->prepare("SELECT*FROM more_input WHERE soort=? AND school_name=?",array("opendag",$schoolname));
                    $select_day = $this->prepare("SELECT*FROM open_day WHERE school_name=?",array($schoolname));
                    $select_day_data = $this->prepare("SELECT*FROM open_data WHERE soort=? AND school_name=?",array("openday",$schoolname));

                    //$select_days = $select_day->fetch();

                    while($display_days = $select_day->fetch()){

                      if(isset($_POST['update'])){

                          $this->prepare("UPDATE open_day SET date_openday=?, time_openday=? WHERE id=? ", array($_POST[$display_days['field_name_date']], $_POST[$display_days['field_name_time']], $display_days['id']));

                      }


                       ?>

                          <script type="text/javascript">

                          window.addEventListener("load", function(){

                            var addinput = document.querySelectorAll(".addInput");
                            var fieldset = document.querySelectorAll(".formulaire");

                            var updateBox = document.querySelectorAll(".updateBox");

                            var datetime = document.createElement("div");
                            datetime.className = "dateTime";

                            var inputDate = document.createElement("input");
                            inputDate.className = "inputs";
                            inputDate.type = "date";
                            inputDate.name = "<?php echo $display_days['field_name_date'];?>";
                            inputDate.placeholder = "Datum";
                            inputDate.value = "<?php echo $display_days['date_openday'];?>";


                            var inputTime = document.createElement("input");
                            inputTime.className = "inputs";
                            inputTime.type = "time";
                            inputTime.name = "<?php echo $display_days['field_name_time'];?>";
                            inputTime.placeholder = "Tijd";
                            inputTime.value = "<?php echo $display_days['time_openday'];?>";

                            var date_data = document.createElement("h3");
                            date_data.className = "schoolData";
                            date_data.innerHTML = 'Datum:  <?php echo $display_days['date_openday'];?>';

                            var time_data = document.createElement("h3");
                            time_data.className = "schoolData";
                            time_data.innerHTML = 'Tijd:  <?php echo $display_days['time_openday'];?>';



                            datetime.appendChild(inputDate);
                            datetime.appendChild(inputTime);

                            fieldset[10].appendChild(datetime);

                            //fieldset[8].appendChild(date_data);
                            //fieldset[8].appendChild(time_data);
                            updateBox[5].appendChild(fieldset[11]);


                           })

                          </script>

                       <?php



                    }


                    while($display_days_data = $select_day_data->fetch()){



                       ?>

                          <script type="text/javascript">

                          window.addEventListener("load", function(){

                            var addinput = document.querySelectorAll(".inputs_parent");

                             addinput[0].value = "<?php echo $display_days_data['name_date'];?>";
                             addinput[1].value = "<?php echo $display_days_data['name_time'];?>";

                           })

                          </script>

                       <?php

                       if(isset($_POST['update'])){

                           $this->prepare("UPDATE open_data SET name_date=?, name_time=? WHERE id=? ", array($_POST['dag_date'], $_POST['dag_time'], $display_days_data['id']));

                       }


                    }




                  }

      /***************************************************************************************************************************/


                  public function display_open_class($schoolname){


                    //$select = $this->prepare("SELECT*FROM more_input WHERE soort=? AND school_name=?",array("opendag",$schoolname));

                    $select_class = $this->prepare("SELECT*FROM open_class WHERE school_name=?",array($schoolname));

                    //$select_classes = $select_class->fetch();
                    //$soort = htmlspecialchars($_POST['soort_field']);

                    while($display_classes = $select_class->fetch()){

                      if(isset($_POST['update'])){

                          $this->prepare("UPDATE open_class SET date_openclass=?, time_openclass=? WHERE id=? ", array($_POST[$display_classes['field_name_date']], $_POST[$display_classes['field_name_time']], $display_classes['id']));

                      }


                       ?>

                          <script type="text/javascript">

                          window.addEventListener("load", function(){

                            var addinput = document.querySelectorAll(".addInput");
                            var fieldset = document.querySelectorAll(".formulaire");

                            var updateBox = document.querySelectorAll(".updateBox");

                            var datetime = document.createElement("div");
                            datetime.className = "dateTime";

                            var inputDate = document.createElement("input");
                            inputDate.className = "inputs";
                            inputDate.type = "date";
                            inputDate.name = "<?php echo $display_classes['field_name_date'];?>";
                            inputDate.placeholder = "Datum";
                            inputDate.value = "<?php echo $display_classes['date_openclass'];?>";

                            var inputTime = document.createElement("input");
                            inputTime.className = "inputs";
                            inputTime.type = "time";
                            inputTime.name = "<?php echo $display_classes['field_name_time'];?>";
                            inputTime.placeholder = "Tijd";
                            inputTime.value = "<?php echo $display_classes['time_openclass'];?>";

                            var date_data = document.createElement("h3");
                            date_data.className = "schoolData";
                            date_data.innerHTML = 'Datum:  <?php echo $display_classes['date_openclass'];?>';

                            var time_data = document.createElement("h3");
                            time_data.className = "schoolData";
                            time_data.innerHTML = 'Tijd:  <?php echo $display_classes['time_openclass'];?>';


                            datetime.appendChild(inputDate);
                            datetime.appendChild(inputTime);

                            fieldset[12].appendChild(datetime);
                            //fieldset[10].appendChild(date_data);
                            //fieldset[10].appendChild(time_data);

                            updateBox[6].appendChild(fieldset[13]);
                            //fieldset[8].insertBefore(addinput[1], datetime);



                           })

                          </script>

                       <?php


                    }

                    $select_class_data = $this->prepare("SELECT*FROM open_data WHERE soort=? AND school_name=?",array("openclass",$schoolname));



                    while($display_class_data = $select_class_data->fetch()){



                       ?>

                          <script type="text/javascript">

                          window.addEventListener("load", function(){

                            var addinput = document.querySelectorAll(".inputs_parent");

                             addinput[2].value = "<?php echo $display_class_data['name_date'];?>";
                             addinput[3].value = "<?php echo $display_class_data['name_time'];?>";

                           })

                          </script>

                       <?php

                       if(isset($_POST['update'])){

                           $this->prepare("UPDATE open_data SET name_date=?, name_time=? WHERE id=? ", array($_POST['class_date'], $_POST['class_time'], $display_class_data['id']));

                       }


                    }


                  }


    /*****************************************************************************************************************************/

                  public function display_night_information($schoolname){


                    //$select = $this->prepare("SELECT*FROM more_input WHERE soort=? AND school_name=?",array("opendag",$schoolname));

                    $info_night = $this->prepare("SELECT*FROM info_night WHERE school_name=?",array($schoolname));

                    //$info_nights = $info_night->fetch();
                    //$soort = htmlspecialchars($_POST['soort_field']);

                    while($display_night = $info_night->fetch()){

                      if(isset($_POST['update'])){

                          $this->prepare("UPDATE info_night SET date_infonight=?, time_infonight=? WHERE id=? ", array($_POST[$display_night['field_name_date']], $_POST[$display_night['field_name_time']], $display_night['id']));

                      }

                       ?>

                          <script type="text/javascript">

                          window.addEventListener("load", function(){

                            var addinput = document.querySelectorAll(".addInput");
                            var fieldset = document.querySelectorAll(".formulaire");

                            //var pkind = document.querySelector(".pKind");
                            //pkind.value = "<?php echo $display_night['parents_kind'];?>";

                            var updateBox = document.querySelectorAll(".updateBox");

                            var datetime = document.createElement("div");
                            datetime.className = "dateTime";

                            var inputDate = document.createElement("input");
                            inputDate.className = "inputs";
                            inputDate.type = "date";
                            inputDate.name = "<?php echo $display_night['field_name_date'];?>";
                            inputDate.placeholder = "Datum";
                            inputDate.value = "<?php echo $display_night['date_infonight'];?>";

                            var inputTime = document.createElement("input");
                            inputTime.className = "inputs";
                            inputTime.type = "time";
                            inputTime.name = "<?php echo $display_night['field_name_time'];?>";
                            inputTime.placeholder = "Tijd";
                            inputTime.value = "<?php echo $display_night['time_infonight'];?>";

                            var date_data = document.createElement("h3");
                            date_data.className = "schoolData";
                            date_data.innerHTML = 'Datum:  <?php echo $display_night['date_infonight'];?>';

                            var time_data = document.createElement("h3");
                            time_data.className = "schoolData";
                            time_data.innerHTML = 'Tijd:  <?php echo $display_night['time_infonight'];?>';


                            datetime.appendChild(inputDate);
                            datetime.appendChild(inputTime);

                            fieldset[14].appendChild(datetime);
                            //fieldset[12].appendChild(date_data);
                            //fieldset[12].appendChild(time_data);

                            updateBox[7].appendChild(fieldset[15]);
                            //fieldset[10].insertBefore(addinput[2], datetime);



                           })

                          </script>

                       <?php


                    }


                    $select_night_data = $this->prepare("SELECT*FROM night_information WHERE school_name=?",array($schoolname));



                    while($display_night_data = $select_night_data->fetch()){



                       ?>

                          <script type="text/javascript">

                          window.addEventListener("load", function(){

                            var addinput = document.querySelectorAll(".inputs_parent");
                            var addselect = document.querySelector(".pKind");

                             addinput[4].value = "<?php echo $display_night_data['date_infonight'];?>";
                             addinput[5].value = "<?php echo $display_night_data['time_infonight'];?>";
                            addselect.value = "<?php echo $display_night_data['parents_kind'];?>";

                           })

                          </script>

                       <?php

                       if(isset($_POST['update'])){

                           $this->prepare("UPDATE night_information SET date_infonight=?, time_infonight=?, parents_kind=? WHERE id=? ", array($_POST['info_date'], $_POST['info_time'],$_POST['kind_parent'], $display_night_data['id']));

                       }


                    }


                  }

      /********************************************************************************************************************************/


      /********************************************************************************************************************************/


                  public function visit($tablename,$schoolname,$date,$time,$index,$index2,$form_index,$box_index){


                    $select = $this->prepare("SELECT*FROM $tablename WHERE school_name=?",array($schoolname));

                    while($visit = $select->fetch()){


                       ?>

                           <script type="text/javascript">

                              window.addEventListener("load", function(){


                                var formulaire = document.querySelectorAll(".formulaire");

                                var updateBox = document.querySelectorAll(".updateBox");

                                /*var kparent = document.createElement("h3");
                                time.className = "schoolData";
                                time.innerHTML = "<?php echo $visit[$time];?>";*/

                                var date = document.createElement("h3");
                                date.className = "schoolData";
                                date.innerHTML = "Date:  <?php echo $visit[$date];?>"+'   '+ "Time  <?php echo $visit[$time];?>";



                                formulaire['<?php echo $form_index?>'].appendChild(date);

                                updateBox['<?php echo $box_index;?>'].appendChild(formulaire['<?php echo $form_index?>']);

                              })

                           </script>

                       <?php

                    }



                  }




   }




 ?>
