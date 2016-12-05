<?php

  require "../web_app/core/model.php";
  /**
   *
   */
  class admin_model extends model
  {

    private $increase = 0;

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
                   var schoolNAME = document.getElementById("schoolNAME");
                   var updateId = document.getElementById("update_id");

                   var studentContainer = document.createElement("div");
                   studentContainer.className = "studentContainerGrid";

                   var moreUpdate = document.createElement("div");
                   moreUpdate.className = "moreUpdateGrid";


                   var schoolname =  document.createElement("h2");
                   schoolname.className = "schoolnameGrid";
                   schoolname.innerHTML = "<?php echo str_replace("_"," ",$student['schoolname']);?>";

                   var updateLink = document.createElement("a");
                   updateLink.className = "updateLink";

                   updateLink.href = "update?id=<?php echo $_SESSION['id'];?>&schoolname=<?php echo $student['schoolname']; ?>&schoolid=<?php echo $student['id'];?>";

                   var update = document.createElement("button");
                   update.className = "updateGrid";
                   update.innerHTML = "Update";

                   var schoolLink = document.createElement("a");
                   schoolLink.className = "moreLink";
                   schoolLink.href = "gegevens?id=<?php echo $_SESSION['id'];?>&schoolname=<?php echo $student['schoolname']; ?>";

                   var upload = document.createElement("button");
                   upload.className = "moreGrid";
                   upload.innerHTML = "Upload";

                   var delet = document.createElement("button");
                   delet.className = "deleteGrid";
                   delet.innerHTML = "Delete";

                   //moreLink.appendChild(more);
                   moreUpdate.appendChild(upload);
                   updateLink.appendChild(update);
                   moreUpdate.appendChild(updateLink);
                   //moreUpdate.appendChild(update);
                   schoolLink.appendChild(schoolname);
                   studentContainer.appendChild(delet);
                  // studentContainer.appendChild(studentAvatar);
                   studentContainer.appendChild(schoolLink);
                   studentContainer.appendChild(moreUpdate);


                   grid.appendChild(studentContainer);



                  delet.addEventListener("click", function(e){

                       var target = e.target.offsetTop;

                       $(function(){


                           $(deleteForm).animate({

                             top:target+800,
                             marginBottom: -200,

                           },{

                             duration: 1000,
                             easing: "easeOutBounce",

                           })


                       })

                       schoolId.value = "<?php echo $student['id'];?>";
                       schoolNAME.value = "<?php echo $student['schoolname'];?>";


                   })

                   update.addEventListener("click", function(e){


                        var target = e.target.offsetTop;



                    })

                   close.addEventListener("click", function() {

                     $(function(){


                         $(deleteForm).animate({

                           top:0,
                           marginBottom: -400,

                         },{

                           duration: 200,
                           easing: "easeInOutBounce",

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


     }

     public function more_input(){


       ?>

             <script type="text/javascript">



            /* var addInput = document.querySelectorAll(".addInput");
             var fieldset = document.querySelectorAll(".field");

             var addinput1 = document.createElement("div");
             addinput1.className = "dateTime";

             var addinput2 = document.createElement("div");
             addinput2.className = "dateTime";

             var addinput3 = document.createElement("div");
             addinput3.className = "dateTime";


             addInput[0].addEventListener("click", function(){

              // var inputDateName = prompt("Geef een naam aan de nieuw Datum veld!!!");
               //var inputTimeName = prompt("Geef een naam aan de nieuw Tijd veld!!!");

               var rand = Math.floor(Math.random()*20)+1;
               "<?php $rand = rand(1,10);?>";


                var inputDate = document.createElement("input");
                inputDate.name = 'inputDateName';
                inputDate.type = "date";
                inputDate.placeholder = "Datum"

                var inputTime = document.createElement("input");
                inputTime.name = 'inputTimeName';
                inputTime.type = "time";
                inputTime.placeholder = "Tijd"


                addinput1.appendChild(inputDate);
                addinput1.appendChild(inputTime);

                fieldset[0].appendChild(addinput1);

             })

             addInput[1].addEventListener("click", function(){

               var inputDate = document.createElement("input");
               inputDate.name = 'inputDateName';
               inputDate.type = "date";
               inputDate.placeholder = "Datum"

               var inputTime = document.createElement("input");
               inputTime.name = 'inputTimeName';
               inputTime.type = "time";
               inputTime.placeholder = "Tijd"

               addinput2.appendChild(inputDate);
               addinput2.appendChild(inputTime);

               fieldset[1].appendChild(addinput2);

             })

             addInput[2].addEventListener("click", function(){

               var inputDate = document.createElement("input");
               inputDate.name = 'inputDateName';
               inputDate.type = "date";
               inputDate.placeholder = "Datum"

               var inputTime = document.createElement("input");
               inputTime.name = 'inputTimeName';
               inputTime.type = "time";
               inputTime.placeholder = "Tijd"


               addinput3.appendChild(inputDate);
               addinput3.appendChild(inputTime);

               fieldset[2].appendChild(addinput3);

             })*/


             </script>

       <?php


         /*if(isset($_POST['add'])){

           $new_open_dag = $_POST['inputDateName'];
           $new_dag_time = $_POST['inputTimeName'];
           $school_name = htmlspecialchars($_POST['school_name']);

           $this->prepare("INSERT INTO open_day(date_openday,time_openday,school_name) VALUES(?,?,?)",array($new_open_dag,$new_dag_time,$school_name));

        }*/

     }





     public function display_school_list(){


       $select = $this->getPDO()->query("SELECT*FROM schools");

       while($school = $select->fetch()){

           ?>

              <script type="text/javascript">

                window.addEventListener("load", function(){

                  var list = document.getElementById("listOption");

                  var close = document.getElementById("close");
                  var windowH = window.pageYOffset;


                  var deleteForm = document.getElementById("deleteForm");
                  var schoolId = document.getElementById("schoolId");
                  var schoolNAME = document.getElementById("schoolNAME");
                  var updateId = document.getElementById("update_id");

                  var studentContainer = document.createElement("div");
                  studentContainer.className = "studentContainerList";

                /*  var moreUpdate = document.createElement("div");
                  moreUpdate.className = "moreUpdateList";*/


                  var schoolname =  document.createElement("h2");
                  schoolname.className = "schoolnameList";
                  schoolname.innerHTML = "<?php echo str_replace("_"," ",$school['schoolname']);?>";

                  var updateLink = document.createElement("a");
                  updateLink.className = "updateLink";

                  updateLink.href = "update?id=<?php echo $_SESSION['id'];?>&schoolname=<?php echo $school['schoolname']; ?>&schoolid=<?php echo $school['id'];?>";

                  var update = document.createElement("button");
                  update.className = "updateList";
                  update.innerHTML = "Update";

                  var schoolLink = document.createElement("a");
                  schoolLink.className = "schoolLink";
                  schoolLink.href = "gegevens?id=<?php echo $_SESSION['id'];?>&schoolname=<?php echo $school['schoolname']; ?>";

                  var upload = document.createElement("button");
                  upload.className = "moreList";
                  upload.innerHTML = "Upload";

                  var delet = document.createElement("button");
                  delet.className = "deleteList";
                  delet.innerHTML = "Delete";

                  //moreLink.appendChild(more);

                  updateLink.appendChild(update);
                //  moreUpdate.appendChild(updateLink);
                //  moreUpdate.appendChild(upload);
                  //moreUpdate.appendChild(update);
                  schoolLink.appendChild(schoolname);
                 // studentContainer.appendChild(studentAvatar);
                  studentContainer.appendChild(schoolLink);
                  studentContainer.appendChild(updateLink);
                  studentContainer.appendChild(delet);
                  studentContainer.appendChild(upload);


                  list.appendChild(studentContainer);



                 delet.addEventListener("click", function(e){

                      var target = e.target.offsetTop;

                      $(function(){


                          $(deleteForm).animate({

                            top:target+800,
                            marginBottom: -200,

                          },{

                            duration: 1000,
                            easing: "easeOutBounce",

                          })


                      })

                      schoolId.value = "<?php echo $school['id'];?>";
                      schoolNAME.value = "<?php echo $school['schoolname'];?>";


                  })

                  update.addEventListener("click", function(e){


                       var target = e.target.offsetTop;



                   })

                  close.addEventListener("click", function() {

                    $(function(){


                        $(deleteForm).animate({

                          top:0,
                          marginBottom: -400,

                        },{

                          duration: 200,
                          easing: "easeInOutBounce",

                        })


                    })

                  })


                })

              </script>

           <?php

       }

   }


     public function delete_school(){

        if(isset($_POST['delete'])){

            $pass = sha1($_POST['password']);
            $school_name = htmlspecialchars($_POST['school_name']);
            $id = $_POST['school_id'];

            if(!empty($pass)){

              $select = $this->prepare("SELECT*FROM admin WHERE id=?",array($_SESSION['id']));
              $pass_check = $select->fetch();

              if($pass == $pass_check['password']){

                $selectSchool = $this->prepare("SELECT*FROM schools WHERE id=? AND schoolname=?", array($id,$school_name));
                $id_check = $selectSchool->fetch();

                if($id == $id_check['id'] AND $school_name == $id_check['schoolname']){

                 $this->prepare("DELETE FROM schools WHERE id=?",array($id));
                 $this->prepare("DELETE FROM open_day WHERE school_name=?",array($school_name));
                 $this->prepare("DELETE FROM open_class WHERE school_name=?",array($school_name));
                 $this->prepare("DELETE FROM info_night WHERE school_name=?",array($school_name));

               }else{


                  $this->error("u kunt de id en de naam van het geklikt school niet veranderen");

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
