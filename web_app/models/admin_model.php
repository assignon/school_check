<?php

  require "../web_app/core/model.php";
  /**
   *
   */
  class admin_model extends model
  {

    private $increase = 0;
    private $huidig_pagina;
    private $perPagina;

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

       $schools = $this->getPDO()->query("SELECT count(id) as nschools FROM schools");
       $schools_fetch = $schools->fetch();

       $nschools = $schools_fetch['nschools'];
       $this->perPagina = 10;
       //$currentPage = 1;

       $aantal_Pagina = ceil($nschools /  $this->perPagina);

       if(isset($_GET['p']) AND $_GET['p'] > 0 AND $_GET['p'] <= $aantal_Pagina){

         $this->huidig_pagina = $_GET['p'];

       }else{

          $this->huidig_pagina = 1;

       }

      ?>

         <div class="paginate">
           <?php

           for ($i=1; $i <= $aantal_Pagina; $i++) {
             ?>

                  <a href="welcom.php?action=admin&id=<?php echo $_SESSION['id'];?>&p=<?php echo $i;?>" class="pagination"><?php echo $i; ?></a>

             <?php
             //echo " <a href=\"welcom.php?action=admin$id=$_SESSION['id']&p=$i\" class='paginate'>$i</a> ";
           }

           ?>

         </div>

      <?php

       $limit =  (($this->huidig_pagina-1)*$this->perPagina);
       //echo $nschools;


        $select = $this->getPDO()->query("SELECT*FROM schools ORDER BY id DESC LIMIT $limit".",$this->perPagina");

        while($school = $select->fetch()){

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
                   schoolname.innerHTML = "<?php echo str_replace("_"," ",$school['schoolname']);?>";

                   var updateLink = document.createElement("a");
                   updateLink.className = "updateLink";

                   updateLink.href = "welcom.php?action=update&id=<?php echo $_SESSION['id'];?>&schoolname=<?php echo $school['schoolname']; ?>&schoolid=<?php echo $school['id'];?>";

                   var update = document.createElement("button");
                   update.className = "updateGrid";
                   update.innerHTML = "Update";

                   var schoolLink = document.createElement("a");
                   schoolLink.className = "moreLink";
                   schoolLink.href = "welcom.php?action=data&id=<?php echo $_SESSION['id'];?>&schoolname=<?php echo $school['schoolname']; ?>";

                   var uploadLink = document.createElement("a");
                   uploadLink.className = "uploadLink";
                   uploadLink.href = "welcom.php?action=datacheck&id=<?php echo $_SESSION['id'];?>&schoolname=<?php echo $school['schoolname']; ?>";


                   var upload = document.createElement("button");
                   upload.className = "uploadGrid";
                   upload.innerHTML = "Upload";

                   var delet = document.createElement("button");
                   delet.className = "deleteGrid";
                   delet.innerHTML = "Delete";

                   uploadLink.appendChild(upload);
                   moreUpdate.appendChild(uploadLink);
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




     public function display_school_list(){

       $schools = $this->getPDO()->query("SELECT count(id) as nschools FROM schools");
       $schools_fetch = $schools->fetch();

       $nschools = $schools_fetch['nschools'];
       $this->perPagina = 1;
       //$currentPage = 1;

       $aantal_Pagina = ceil($nschools /  $this->perPagina);

       if(isset($_GET['p']) AND $_GET['p'] > 0 AND $_GET['p'] <= $aantal_Pagina){

         $this->huidig_pagina = $_GET['p'];

       }else{

          $this->huidig_pagina = 10;

       }

      ?>

         

      <?php

       $limit =  (($this->huidig_pagina-1)*$this->perPagina);
       //echo $nschools;


        $select = $this->getPDO()->query("SELECT*FROM schools ORDER BY id DESC LIMIT $limit".",$this->perPagina");


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

                            duration: 500,
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
                 $this->prepare("DELETE FROM online WHERE schoolname=?",array($school_name));
                 $this->prepare("DELETE FROM levels_data WHERE school_name=?",array($school_name));
                 $this->prepare("DELETE FROM levels_data WHERE school_name=?",array($school_name));
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

     public function admin_avatar(){

      $select = $this->getPDO()->query("SELECT*FROM user_avatar");
      $display = $select->fetch();
      ?>

        <script type="text/javascript">

           window.addEventListener("load", function(){


              var avatar = document.getElementById("userAvatar");
              avatar.src = "<?php echo $display['image_src'];?>";


           })

        </script>

      <?php

     }





  }


 ?>
