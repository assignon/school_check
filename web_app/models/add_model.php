<?php


require "../web_app/core/model.php";
/**
 *
 */
class add_model extends model
{

 private $item_name;
 private $leves_names;

  function __construct()
  {
      parent::__construct();
  }

  public function get_users_data($where,$id,$table_name){

      $req = $this->prepare_fetch("SELECT*FROM $table_name WHERE $where=?",[$id]);
      return $req;


   }

   public function allschool($options){

     $select_school = $this->getPDO()->query("SELECT*FROM schools");
     while($select_fetch = $select_school->fetch()){

        ?>

           <script type="text/javascript">


               window.addEventListener("load", function(){

                 var select = document.getElementById("allschool");

                 var option = document.createElement("option");
                 option.value = "<?php echo $select_fetch[$options];?>"
                 option.innerHTML = "<?php echo $select_fetch[$options];?>"

                 select.appendChild(option);


               })

           </script>

        <?php

     }

   }


   public function add_field(){



      if(isset($_POST['add_input'])){

        $fieldnamedate = htmlspecialchars($_POST['input_name_date']);
        $fieldnametime = htmlspecialchars($_POST['input_name_time']);
        $fieldname_date = htmlspecialchars($_POST['field_date']);
        $fieldname_time = htmlspecialchars($_POST['field_time']);
        $soort = htmlspecialchars($_POST['soort']);
        $school_name = htmlspecialchars($_POST['schools']);
        $parent_kind = htmlspecialchars($_POST['kparent']);

        if(!empty($fieldnamedate) AND !empty($fieldnametime) AND !empty($fieldname_date) AND !empty($fieldname_time) AND isset($soort) AND !empty($school_name)){

          if($soort == "openday"){

            $select = $this->prepare("SELECT*FROM open_day WHERE field_name_date=? AND field_name_time=? AND date_openday=? AND time_openday=? ", array($fieldnamedate,$fieldnametime, $fieldname_date, $fieldname_time));
            $inputCount = $select->rowCount();

            if($inputCount == 0){

                 $this->prepare("INSERT INTO open_day(field_name_date, date_openday, field_name_time, time_openday, school_name) VALUES(?,?,?,?,?)",array($fieldnamedate, $fieldname_date,$fieldnametime, $fieldname_time, $school_name));
                 $this->succes("toegevoegd");


            }else{

              $this->error("Deze Datun of Tijd bestaat al.");

            }

          }else if($soort == "openclass"){


            $select = $this->prepare("SELECT*FROM open_class WHERE field_name_date=? AND field_name_time=? AND date_openclass=? AND time_openclass=? ", array($fieldnamedate, $fieldnametime, $fieldname_date, $fieldname_time));
            $inputCount = $select->rowCount();

            if($inputCount == 0){

                 $this->prepare("INSERT INTO open_class(field_name_date, date_openclass, field_name_time, time_openclass, school_name) VALUES(?,?,?,?,?)",array($fieldnamedate, $fieldname_date, $fieldnametime, $fieldname_time, $school_name));
                 $this->succes("toegevoegd");


            }else{

              $this->error("Deze Datun of Tijd bestaat al.");

            }


          }else if($soort == "nightinfo"){


            $select = $this->prepare("SELECT*FROM info_night WHERE field_name_date=? AND field_name_time AND date_infonight=? AND time_infonight=? ", array($fieldnamedate, $fieldnametime, $fieldname_date, $fieldname_time));
            $inputCount = $select->rowCount();

            if($inputCount == 0){

                 $this->prepare("INSERT INTO info_night(field_name_date, date_infonight, field_name_time, time_infonight, parents_kind, school_name) VALUES(?,?,?,?,?,?)",array($fieldnamedate, $fieldname_date, $fieldnametime, $fieldname_time, $parent_kind, $school_name));
                 $this->succes("toegevoegd");


            }else{

              $this->error("Deze Datun of Tijd bestaat al.");

            }


          }

        }else{

           $this->error("Een naan geven");

        }

      }

   }

   public function display_open_day(){


     $select = $this->prepare("SELECT*FROM more_input WHERE soort=?",array("opendag"));
     //$soort = htmlspecialchars($_POST['soort_field']);

     while($displayInput = $select->fetch()){

        ?>

           <script type="text/javascript">

           window.addEventListener("load", function(){

             var addinput = document.querySelectorAll(".addInput");
             var fieldset = document.querySelectorAll(".field");
             var soort = document.getElementById("soort");
             var inputSubmit = document.getElementById("inputAddSubmit");

             var datetime = document.createElement("div");
             datetime.className = "dateTime";

             var inputDate = document.createElement("input");
             inputDate.type = "date";
             inputDate.name = "<?php echo $displayInput['name_date'];?>";
             inputDate.placeholder = "<?php echo $displayInput['placeholder_date'];?>";

             var inputTime = document.createElement("input");
             inputTime.type = "time";
             inputTime.name = "<?php echo $displayInput['name_time'];?>";
             inputTime.placeholder = "<?php echo $displayInput['placeholder_time'];?>";

             datetime.appendChild(inputDate);
             datetime.appendChild(inputTime);

             fieldset[0].appendChild(datetime);
             fieldset[0].insertBefore(addinput[0], datetime);


            })

           </script>

        <?php


     }


   }


   public function display_open_class(){


     $select = $this->prepare("SELECT*FROM more_input WHERE soort=?",array("openklas"));
     //$soort = htmlspecialchars($_POST['soort_field']);

     while($displayInput = $select->fetch()){

        ?>

           <script type="text/javascript">

           window.addEventListener("load", function(){

             var addinput = document.querySelectorAll(".addInput");
             var fieldset = document.querySelectorAll(".field");
             var soort = document.getElementById("soort");
             var inputSubmit = document.getElementById("inputAddSubmit");

             var datetime = document.createElement("div");
             datetime.className = "dateTime";

             var inputDate = document.createElement("input");
             inputDate.type = "date";
             inputDate.name = "<?php echo $displayInput['name_date'];?>";
             inputDate.placeholder = "<?php echo $displayInput['placeholder_date'];?>";

             var inputTime = document.createElement("input");
             inputTime.type = "time";
             inputTime.name = "<?php echo $displayInput['name_time'];?>";
             inputTime.placeholder = "<?php echo $displayInput['placeholder_time'];?>";

             datetime.appendChild(inputDate);
             datetime.appendChild(inputTime);

             fieldset[1].appendChild(datetime);
             fieldset[1].insertBefore(addinput[1], datetime);



            })

           </script>

        <?php


     }


   }

   public function display_night_information(){


     $select = $this->prepare("SELECT*FROM more_input WHERE soort=?",array("informatienacht"));
     //$soort = htmlspecialchars($_POST['soort_field']);

     while($displayInput = $select->fetch()){

        ?>

           <script type="text/javascript">

           window.addEventListener("load", function(){

             var addinput = document.querySelectorAll(".addInput");
             var fieldset = document.querySelectorAll(".field");
             var soort = document.getElementById("soort");
             var inputSubmit = document.getElementById("inputAddSubmit");

             var datetime = document.createElement("div");
             datetime.className = "dateTime";

             var inputDate = document.createElement("input");
             inputDate.type = "date";
             inputDate.name = "<?php echo $displayInput['name_date'];?>";
             inputDate.placeholder = "<?php echo $displayInput['placeholder_date'];?>";

             var inputTime = document.createElement("input");
             inputTime.type = "time";
             inputTime.name = "<?php echo $displayInput['name_time'];?>";
             inputTime.placeholder = "<?php echo $displayInput['placeholder_time'];?>";

             datetime.appendChild(inputDate);
             datetime.appendChild(inputTime);

             fieldset[2].appendChild(datetime);
             fieldset[2].insertBefore(addinput[2], datetime);



            })

           </script>

        <?php


     }


   }


   public function test(){

     $select_level = $this->getPDO()->query("SELECT level_name FROM add_levels");
     while($selectLevels = $select_level->fetch()){


         $selectLevels_values[] = $_POST[$selectLevels['level_name']];


     }


       if(isset($_POST['add']) AND isset($selectLevels_values)){

        //$selectLevels_values = array();
        //array_push($selectLevels_values,$_POST[$selectLevels['level_name']]);
          echo "test".' '. $selectLevels;

            if(!empty($selectLevels_values) AND isset($selectLevels_values)){

              echo "dump: ";
             var_dump($selectLevels_values);
             foreach ($selectLevels_values as $values) {
               echo "test". $values;
               if(isset($_POST[$values])){

                 var_dump($values);

               }

          }

            }

}
   }



   public function add_school(){

      if(isset($_POST['add'])){



        $school_name = htmlspecialchars($_POST['school_name']);
        $adress = htmlspecialchars($_POST['adress']);
        $street_number = htmlspecialchars($_POST['street_num']);
        $zip_code = htmlspecialchars($_POST['zip_code']);
        $district = htmlspecialchars($_POST['district']);
        $telephone = htmlspecialchars($_POST['tel']);
        $email = htmlspecialchars($_POST['email']);
        $web_site = htmlspecialchars($_POST['web_site']);
        $private = htmlspecialchars($_POST['private']);
        $concept = htmlspecialchars($_POST['concept']);
        $special = htmlspecialchars($_POST['special']);
        $basic = htmlspecialchars($_POST['basic']);
        $tto = htmlspecialchars($_POST['tto']);
        $sport = htmlspecialchars($_POST['sport']);
        $tech = htmlspecialchars($_POST['tech']);
        $spanish = htmlspecialchars($_POST['spanish']);
        $art = htmlspecialchars($_POST['art']);


        $old_open_day = $_POST['dag_date'];
        $old_day_time = $_POST['dag_time'];

        $old_open_class = $_POST['class_date'];
        $old_class_time = $_POST['class_time'];

        $old_infonight_date = $_POST['info_date'];
        $old_infonight_time = $_POST['info_time'];
        $kParent = $_POST['kind_parent'];



        $selectday = $this->prepare("SELECT*FROM more_input WHERE soort=?", array("opendag"));
        $openday = $selectday->fetch();

        $selectclass = $this->prepare("SELECT*FROM more_input WHERE soort=?", array("openklas"));
        $openclass = $selectclass->fetch();

        $selectinfo_night = $this->prepare("SELECT*FROM more_input WHERE soort=?", array("informatienacht"));
        $openinfo_night = $selectinfo_night->fetch();

      /*  $open_dag =  $_POST[$openday['name_date']];
        $dag_time = $_POST[$openday['name_time']];


        $open_class = $_POST[$openclass['name_date']];
        $class_time = $_POST[$openclass['name_time']];

        $info_dag = $_POST[$openinfo_night['name_date']];
        $info_time = $_POST[$openinfo_night['name_time']];*/


        $select_level = $this->getPDO()->query("SELECT*FROM add_levels");
      /*  while($selectLevels = $select_level->fetch()){

           //$selectLevels_values = array();
           //array_push($selectLevels_values,$_POST[$selectLevels['level_name']]);

              $selectLevels_values[] = $_POST[$selectLevels['level_name']];



      }*/
        //$selectLevels_values_explode = explode(',',$selectLevels_values)
        //$selectLevels_values_arr = array($selectLevels_values_explode);

       //$selectLevels = $select_level->fetch();
       //$selectLevels_values = $_POST[$selectLevels['level_name']];



        if(!empty($school_name) AND !empty($adress) AND !empty($street_number) AND !empty($zip_code) AND !empty($district) AND !empty($telephone) AND !empty($email) AND !empty($web_site) AND !empty($private) AND !empty($concept) AND !empty($special) AND !empty($basic)){


           $select = $this->prepare("SELECT*FROM schools WHERE schoolname=? AND adress=? AND zipcode=? AND telnr=? AND email=? AND website=?", array($school_name, $adress, $zip_code, $telephone, $email, $web_site));
           $school_count = $select->rowCount();

           if($school_count == 0){

             $this->prepare("INSERT INTO schools(schoolname, adress,street_number, zipcode, district, telnr, email, website, private, concept, specials, basis,tto,sport,spanish,technologie,art) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
             array($school_name, $adress, $street_number, $zip_code, $district, $telephone, $email, $web_site, $private, $concept, $special, $basic,$tto,$sport,$spanish,$tech,$art));


             $this->prepare("INSERT INTO open_day(date_openday,time_openday,school_name) VALUES(?,?,?)",array($old_open_day, $old_day_time, $school_name));


             $this->prepare("INSERT INTO open_class(date_openclass,time_openclass,school_name) VALUES(?,?,?)",array($old_open_class,$old_class_time,$school_name));


            $this->prepare("INSERT INTO info_night(date_infonight,time_infonight,parents_kind,school_name) VALUES(?,?,?,?)",array($old_infonight_date,$old_infonight_time,$kParent,$school_name));



             /*$this->prepare("INSERT INTO open_day(date_openday,time_openday,school_name) VALUES(?,?,?)",array($open_dag,$dag_time,$school_name));


             $this->prepare("INSERT INTO open_class(date_openclass,time_openclass,school_name) VALUES(?,?,?)",array($open_class,$class_time,$school_name));


            $this->prepare("INSERT INTO info_night(date_infonight,time_infonight,parents_kind,school_name) VALUES(?,?,?,?)",array($info_dag,$info_time,$kParent,$school_name));*/

          /*  echo "dump: ";
             var_dump($selectLevels_values);
             foreach ($selectLevels_values as $values) {

               if(isset($_POST[$values])){

                 var_dump($values);

                   $this->prepare("INSERT INTO levels_data(levels_name, school_name) VALUES(?,?)", array($values,$school_name));


               }

             }*/






            $this->succes("School met succes toegevoegd");



           }else{

              $this->error("De"." ".$school_name."  " .$adress. " ".$zip_code." ".$telephone." ".$web_site." ".$email." "."school Bestaat Al");

           }

        }else{

          $this->error("Alles velden invullen");

        }

      }

   }

   public function addAfter($table_name,$submit,$item_name,$item_name2,$row_name,$row_name2){

      if(isset($_POST[$submit])){

         $this->item_name = $_POST[$item_name];
         $this->item_name2 = $_POST[$item_name2];

         if(!empty($this->item_name)){

            $select = $this->prepare("SELECT*FROM $table_name WHERE $row_name=?,$row_name2=?", array($this->item_name2));

            $row = $select->rowCount();

            if($row == 0){

               $this->prepare("INSERT INTO $table_name($row_name,$row_name2) VALUES(?)", array($this->item_name,$item_name2));
              $this->succes("Toegevoegd");

            }else{

              $this->error("Bestaat Al");

            }


         }

      }

   }


   public function display_level(){

     $select = $this->getPDO()->query("SELECT*FROM add_levels");
     while($display = $select->fetch()){
      //  $levels[] = $display['level_name'];

        ?>

            <script type="text/javascript">

               var level = document.getElementById("levels");

               var checkboxContainer = document.createElement("div");
               checkboxContainer.className = "checkboxContainer";

               var checkboxValue = document.createElement("h4");
               checkboxValue.className = "checkboxValue";
               checkboxValue.innerHTML = "<?php echo $display['level_value'];?>";

               var checkBox = document.createElement("input");
               checkBox.className = "checkBox";
               checkBox.type = "checkbox";
               checkBox.name = "<?php echo $display['level_name'];?>";
               checkBox.value = "<?php echo $display['level_value'];?>";


               checkboxContainer.appendChild(checkBox);
               checkboxContainer.appendChild(checkboxValue);

               level.appendChild(checkboxContainer);

            </script>

        <?php


     }

   }


}


 ?>
