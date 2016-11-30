<?php


require "../web_app/core/model.php";
/**
 *
 */
class add_model extends model
{



  function __construct()
  {
      parent::__construct();
  }

  public function get_users_data($where,$id,$table_name){

      $req = $this->prepare_fetch("SELECT*FROM $table_name WHERE $where=?",[$id]);
      return $req;


   }


   public function add_field(){

      if(isset($_POST['add_input'])){

        $fieldname_date = htmlspecialchars($_POST['field_date']);
        $placeholder_date = htmlspecialchars($_POST['place_holder_date']);
        $fieldname_time = htmlspecialchars($_POST['field_time']);
        $placeholder_time = htmlspecialchars($_POST['place_holder_time']);

        if(!empty($fieldname_date) AND !empty($fieldname_time)){

            $select = $this->getPDO()->query("SELECT*FROM more_input");
            $inputCount = $select->rowCount();

            if($inputCount == 0){

               $this->prepare("INSERT INTO more_input(name_date, placeholder_date, name_time, placeholder_time) VALUES(?,?,?,?)",array($fieldname_date, $placeholder_date, $fieldname_time, $placeholder_time));

            }else{

              $this->error("Deze naam bestaat al.");

            }

        }else{

           $this->error("Een naan geven");

        }

      }

   }

   public function display_field(){

     //$soort = htmlspecialchars($_POST['soort']);
     $select = $this->getPDO()->query("SELECT*FROM more_input");

     while($displayInput = $select->fetch()){

        ?>

           <script type="text/javascript">

           window.addEventListener("load", function(){

             var addinput = document.querySelectorAll(".addInput");
             var fieldset = document.querySelectorAll(".field");
             var soort = document.getElementById("soort");

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


                if(soort.value == "opendag"){

                  datetime.appendChild(inputDate);
                  datetime.appendChild(inputTime);

                  fieldset[0].appendChild(datetime);

                }else if(soort.value == "openklas"){

                  datetime.appendChild(inputDate);
                  datetime.appendChild(inputTime);

                  fieldset[1].appendChild(datetime);

                }else if(soort.value == "informatienacht"){

                  datetime.appendChild(inputDate);
                  datetime.appendChild(inputTime);

                  fieldset[2].appendChild(datetime);


                  }

            })

           </script>

        <?php


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

        $open_dag = $_POST['dag_date'];
        $dag_time = $_POST['dag_time'];
        /*$new_open_dag = $_POST['inputDateName'];
        $new_dag_time = $_POST['inputTimeName'];*/


        $open_class = $_POST['class_date'];
        $class_time = $_POST['class_time'];

        $info_dag = $_POST['info_date'];
        $info_time = $_POST['info_time'];
        $kParent = $_POST['kind_parent'];



        if(!empty($school_name) AND !empty($adress) AND !empty($street_number) AND !empty($zip_code) AND !empty($district) AND !empty($telephone) AND !empty($email) AND !empty($web_site) AND !empty($private) AND !empty($concept) AND !empty($special) AND !empty($basic)){


           $select = $this->prepare("SELECT*FROM schools WHERE schoolname=? AND adress=? AND zipcode=? AND telnr=? AND email=? AND website=?", array($school_name, $adress, $zip_code, $telephone, $email, $web_site));
           $school_count = $select->rowCount();

           if($school_count == 0){

             $this->prepare("INSERT INTO schools(schoolname, adress,street_number, zipcode, district, telnr, email, website, private, concept, specials, basis) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)",
             array($school_name, $adress, $street_number, $zip_code, $district, $telephone, $email, $web_site, $private, $concept, $special, $basic));

             $this->prepare("INSERT INTO open_day(date_openday,time_openday,school_name) VALUES(?,?,?)",array($open_dag,$dag_time,$school_name));

             //$this->prepare("INSERT INTO open_day(date_openday,time_openday,school_name) VALUES(?,?,?)",array($new_open_dag,$new_dag_time,$school_name));

             $this->prepare("INSERT INTO open_class(date_openclass,time_openclass,school_name) VALUES(?,?,?)",array($open_class,$class_time,$school_name));


           $this->prepare("INSERT INTO info_night(date_infonight,time_infonight,parents_kind,school_name) VALUES(?,?,?,?)",array($info_dag,$info_time,$kParent,$school_name));

            $this->succes("School met succes toegevoegd");

            //header("Location:admin?id=".$_SESSION['id']);

           }else{

              $this->error("De"." ".$school_name."  " .$adress. " ".$zip_code." ".$telephone." ".$web_site." ".$email." "."school Bestaat Al");

           }

        }else{

          $this->error("Alles velden invullen");

        }

      }

   }


}


 ?>
