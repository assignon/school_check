<?php

  require "../web_app/core/model.php";
  /**
   *
   */
  class admin_model extends model
  {

    function __construct()
    {
      parent::__construct();
    }

    public function get_users_data($where,$id,$table_name){

        $req = $this->prepare_fetch("SELECT*FROM $table_name WHERE $where=?",[$id]);
        return $req;


     }


     public function insert_student(){

        $this->prepare("INSERT INTO schools(schoolname, adress, zipcode, district, telnr, email, website, openday, openclass, infonight, private, level, concept, specials, tto, sports, tech, spanish, vso, vmbob, vmbok, vmbot, havo, vwo, gymnasium, basis, art) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
        array('Alex_Grah_Bellschool_Orion_College_West','Zekeringstraat45','1014BP','Amsterdam',206111213,'orioncollegewest@orion_nl','orioncollege_orion_nl\locatie_west_3_4','n','n','n','n','Vso','standaard','Speciaal_onderwijs','n','n','n','n','Y','n','n','n','n','n','n','openbaar','n'));

     }

     public function display_school_grid(){


        $select = $this->getPDO()->query("SELECT*FROM schools");

        while($student = $select->fetch()){

            ?>

               <script type="text/javascript">

                 window.addEventListener("load", function(){

                   var grid = document.getElementById("gridOption");

                   var close = document.getElementById("close");
                   var windowH = window.pageYOffset;


                   var deleteForm = document.getElementById("deleteForm");
                   var schoolId = document.getElementById("schoolId");

                   var studentContainer = document.createElement("div");
                   studentContainer.className = "studentContainerGrid";

                   var moreUpdate = document.createElement("div");
                   moreUpdate.className = "moreUpdateGrid";


                   var schoolname = studentAvatar = document.createElement("h2");
                   schoolname.className = "schoolnameGrid";
                   schoolname.innerHTML = "<?php echo str_replace("_"," ",$student['schoolname']);?>";

                   var update = document.createElement("button");
                   update.className = "updateGrid";
                   update.innerHTML = "Update";

                   var more = document.createElement("button");
                   more.className = "moreGrid";
                   more.innerHTML = "Meer";

                   var delet = document.createElement("button");
                   delet.className = "deleteGrid";
                   delet.innerHTML = "Delete";

                   moreUpdate.appendChild(more);
                   moreUpdate.appendChild(update);
                   studentContainer.appendChild(delet);
                  // studentContainer.appendChild(studentAvatar);
                   studentContainer.appendChild(schoolname);
                   studentContainer.appendChild(moreUpdate);


                   grid.appendChild(studentContainer);


                /*   var schoolname = document.getElementById("schoolName").value;
                   schoolname = "<?php echo $student['schoolname'];?>";

                   var adress = document.getElementById("adress").value;
                   adress = "<?php echo $student['adress'];?>";

                   var streetNumber = document.getElementById("streetNumber").value;
                  streetNumber = "<?php echo $student['street_number'];?>";

                   var telNumber = document.getElementById("telNumber").value;
                   telNumber = "<?php echo $student['telnr'];?>";

                   var zipcode = document.getElementById("zipcode").value;
                   zipcode = "<?php echo $student['zipcode'];?>";

                   var district = document.getElementById("district").value;
                  district = "<?php echo $student['district'];?>";

                   var email = document.getElementById("email").value;
                   email = "<?php echo $student['email'];?>";

                   var webSite = document.getElementById("webSite").value;
                   webSite = "<?php echo $student['website'];?>";

                   var email = document.getElementById("email").value;
                   email = "<?php echo $student['email'];?>";

                   var privat = document.getElementById("private").value;
                   privat = "<?php echo $student['private'];?>";

                   var concept = document.getElementById("concept").value;
                   concept = "<?php echo $student['concept'];?>";

                   var special = document.getElementById("special").value;
                   special = "<?php echo $student['special'];?>";

                   var basic = document.getElementById("basic").value;
                   basic = "<?php echo $student['basic'];?>";*/


                  delet.addEventListener("click", function(e){

                       var target = e.target.offsetTop;

                       $(function(){


                           $(deleteForm).animate({

                             top:target+500,

                           },{

                             duration: 1000,
                             easing: "easeOutBounce",

                           })


                       })

                       schoolId.value = "<?php echo $student['id'];?>";


                   })

                   update.addEventListener("click", function(e){


                        var target = e.target.offsetTop;

                        $(function(){


                            $("#update").animate({

                              top:target+300,

                            },{

                              duration: 1000,
                              easing: "easeOutElastic",

                            })


                        })

                        //schoolId.value = "<?php echo $student['id'];?>";


                    })

                   close.addEventListener("click", function() {

                     $(function(){


                         $(deleteForm).animate({

                           top:0,

                         },{

                           duration: 200,
                           easing: "easeInOutBounce",

                         })


                     })

                   })

                   sluitUpdate.addEventListener("click", function() {

                     $(function(){


                         $("#update").animate({

                           top:0,

                         },{

                           duration: 1000,
                           easing: "easeInOutElastic",

                         })


                     })

                   })



                 })

               </script>

            <?php

        }

     }


     public function input_value(){

       $school_name = htmlspecialchars($this->POST('school_name'));
       $adress = htmlspecialchars($this->POST('adress'));
       $street_number = htmlspecialchars($this->POST('street_num'));
       $zip_code = htmlspecialchars($this->POST('zip_code'));
       $district = htmlspecialchars($this->POST('district'));
       $telephone = htmlspecialchars($this->POST('tel'));
       $email = htmlspecialchars($this->POST('email'));
       $web_site = htmlspecialchars($this->POST('web_site'));
       $private = htmlspecialchars($this->POST('private'));
       $concept = htmlspecialchars($this->POST('concept'));
       $special = htmlspecialchars($this->POST('special'));
       $basic = htmlspecialchars($this->POST('basic'));


       ?>

            <script type="text/javascript">


            window.addEventListener("load", function(){


               var schoolname = document.getElementById("schoolName").value;
               schoolname = "<?php echo $school_name;?>";

               var adress = document.getElementById("adress").value;
               adress = "<?php echo $adress;?>";

               var streetNumber = document.getElementById("streetNumber").value;
              streetNumber = "<?php echo $street_number;?>";

               var telNumber = document.getElementById("telNumber").value;
               telNumber = "<?php echo $telephone;?>";

               var zipcode = document.getElementById("zipcode").value;
               zipcode = "<?php echo $szip_code;?>";

               var district = document.getElementById("district").value;
              district = "<?php echo $district;?>";

               var email = document.getElementById("email").value;
               email = "<?php echo $email;?>";

               var webSite = document.getElementById("webSite").value;
               webSite = "<?php echo $web_site;?>";

               var email = document.getElementById("email").value;
               email = "<?php echo $email;?>";

               var privat = document.getElementById("private").value;
               privat = "<?php echo $private;?>";

               var concept = document.getElementById("concept").value;
               concept = "<?php echo $concept;?>";

               var special = document.getElementById("special").value;
               special = "<?php echo $special;?>";

               var basic = document.getElementById("basic").value;
               basic = "<?php echo $basic;?>";


            })

            </script>

       <?php

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

          if(!empty($school_name) AND !empty($adress) AND !empty($street_number) AND !empty($zip_code) AND !empty($district) AND !empty($telephone) AND !empty($email) AND !empty($web_site) AND !empty($private) AND !empty($concept) AND !empty($special) AND !empty($basic)){


             $select = $this->prepare("SELECT*FROM schools WHERE schoolname=? AND adress=? AND zipcode=? AND telnr=? AND email=? AND website=?", array($school_name, $adress, $zip_code, $telephone, $email, $web_site));
             $school_count = $select->rowCount();

             if($school_count == 0){

               $this->prepare("INSERT INTO schools(schoolname, adress,street_number, zipcode, district, telnr, email, website, private, concept, specials, basis) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)",
               array($school_name, $adress, $street_number, $zip_code, $district, $telephone, $email, $web_site, $private, $concept, $special, $basic));

             }else{

                $this->error("De"." ".$school_name." ".$adress." ".$zip_code." ".$telephone." ".$web_site." ".$email." "."school Bestaat Al");

             }

          }else{

            $this->error("Alles velden invullen");

          }

        }

     }



     public function display_sschool_list(){


        $select = $this->getPDO()->query("SELECT*FROM schools");

        while($student = $select->fetch()){

            ?>

               <script type="text/javascript">

                 window.addEventListener("load", function(){

                   var grid = document.getElementById("gridOption");

                   var studentContainer = document.createElement("div");
                   studentContainer.className = "studentContainer";

                   var studentAvatar = document.createElement("img");
                   studentAvatar.className = "studentAvatar";
                   studentAvatar.src = "";

                   var schoolname = studentAvatar = document.createElement("h2");
                   schoolname.className = "schoolname";
                   schoolname.innerHTML = "<?php echo $student['schoolname'].' '.$student['id'];?>";

                   var update = document.createElement("button");
                   update.className = "update";
                   update.innerHTML = "Update";

                   var delet = document.createElement("button");
                   delet.className = "delete";
                   delet.innerHTML = "Delete";

                   studentContainer.appendChild(studentAvatar);
                   studentContainer.appendChild(schoolname);
                   studentContainer.appendChild(update);
                   studentContainer.appendChild(delet);

                  // grid.appendChild(studentContainer);

                  delet.addEventListener("click", function(){
                      //alert("<?php //echo $student['id'];?>")
                       var deleteForm = document.getElementById("deleteForm");
                       var schoolId = document.getElementById("schoolId");

                       schoolId.value = "<?php echo $student['id'];?>";

                       deleteForm.style.top = "400px";



                 })

               </script>

            <?php

        }

     }


     public function delete_school(){

        if(isset($_POST['delete'])){

            $pass = sha1($_POST['password']);
            $id = $_POST['school_id'];

            if(!empty($pass)){

              $select = $this->prepare("SELECT*FROM admin WHERE id=?",array($_SESSION['id']));
              $pass_check = $select->fetch();

              if($pass == $pass_check['password']){

                $selectSchool = $this->prepare("SELECT*FROM schools WHERE id=?", array($id));
                $id_check = $selectSchool->fetch();

                if($id == $id_check['id']){

                 $this->prepare("DELETE FROM schools WHERE id=?",array($id));

               }else{


                  $this->error("u kunt de id van het geklickt school niet veranderen");

               }

              }else{

                $this->error("wachtwoord niet correct");

              }

            }else{

             $this->error("vul een wachtwoord in");

            }


        }


     }

  }


 ?>
