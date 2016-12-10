a <?php

require "../web_app/core/model.php";
/**
 *
 */
class gegevens_model extends model
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

   public function display_schools($schoolname){


      $select = $this->prepare("SELECT*FROM schools WHERE schoolname=?", array($schoolname));
      while($schools = $select->fetch()){

       ?>

         <div id="data">
           <form action="" method="post">
             <table>

                 <tr>

                     <th>School-Name</th>
                     <th>Adress</th>
                     <th>Post-Code</th>
                     <th>Stadsdeel</th>
                     <th>Straat Nummer</th>


                 </tr>

                 <tr>

                     <td>
                         <input type="text" name="school" value="<?php echo $schools['schoolname'];?>">
                         <p><?php echo $schools['schoolname'];?></p>
                     </td>
                     <td>
                         <input type="text" name="adress" value="<?php echo $schools['adress'];?>">
                         <p><?php echo $schools['adress'];?></p>
                     </td>
                     <td>
                         <input type="number" name="zip" value="<?php echo $schools['zipcode'];?>">
                         <p><?php echo $schools['zipcode'];?></p>
                     </td>
                      <td>
                         <input type="text" name="district" value="<?php echo $schools['district'];?>">
                         <p><?php echo $schools['district'];?></p>
                     </td>
                     <td>
                         <input type="number" name="street_num" value="<?php echo $schools['street_number'];?>">
                         <p><?php echo $schools['street_number'];?></p>
                     </td>




                 </tr>

             </table>

               <table>

                   <tr>

                     <th>Email</th>
                     <th>Website</th>
                     <th>Tele.nr.</th>
                     <th>Concept</th>
                     <th>Speciaal</th>


                   </tr>


                   <tr>

                      <td>
                         <input type="email" name="email" value="<?php echo $schools['email'];?>">
                         <p><?php echo $schools['email'];?></p>
                     </td>
                     <td>
                         <input type="text" name="website" value="<?php echo $schools['website'];?>">
                         <a href="" target="_blank"><p><?php echo $schools['website'];?></p></a>
                     </td>
                     <td>
                         <input type="number" name="telnr" value="<?php echo $schools['telnr'];?>">
                         <p><?php echo $schools['telnr'];?></p>
                     </td>

                       <td>
                         <input type="text" name="concept" value="<?php echo $schools['concept'];?>">
                         <p><?php echo $schools['concept'];?></p>
                     </td>
                     <td>
                         <input type="text" name="special" value="<?php echo $schools['specials'];?>">
                         <p><?php echo $schools['specials'];?></p>
                     </td>


                   </tr>

               </table>

               <table>

                   <tr>
                       <th>Tto</th>
                     <th>Tech</th>
                     <th>Spaans</th>
                     <th>Basis</th>
                     <th>Kunst</th>

                   </tr>
                   <tr>

                       <td>
                         <input type="text" name="tto" value="<?php echo $schools['tto'];?>">
                         <p><?php echo $schools['tto'];?></p>
                     </td>
                     <td>
                         <input type="text" name="tech" value="<?php echo $schools['technologie'];?>">
                         <p><?php echo $schools['technologie'];?></p>
                     </td>
                     <td>
                         <input type="text" name="spanish" value="<?php echo $schools['spanish'];?>">
                         <p><?php echo $schools['spanish'];?></p>
                     </td>
                     <td>
                         <input type="text" name="basic" value="<?php echo $schools['basis'];?>">
                         <p><?php echo $schools['basis'];?></p>
                     </td>
                     <td>
                         <input type="text" name="art" value="<?php echo $schools['art'];?>">
                         <p><?php echo $schools['art'];?></p>
                     </td>
                   </tr>

               </table>

               <table>

                  <tr>
                    <th>Sport</th>
                    <th>Prive</th>
                  </tr>

                  <tr>
                    <td>

                      <input type="text" name="sport" value="<?php echo $schools['sport'];?>">
                      <p><?php echo $schools['sport'];?></p>
                      <td>
                          <input type="text" name="private" value="<?php echo $schools['private'];?>">
                          <p><?php echo $schools['private'];?></p>
                      </td>

                    </td>
                  </tr>

               </table>

               <?php

                  $level = $this->prepare("SELECT levels_name FROM levels_data WHERE school_name=?", array($schoolname));
                  while($levels = $level->fetch()){

                     ?>


                            <table class="addedLevel">

                                <tr>
                               <td><input type="text" name="checkUpload" value="<?php echo $levels['levels_name'];?>">
                               <p><?php echo $levels['levels_name'];?></p>
                               </td>
                            </tr>

                            </table>



                     <?php

                  }

                  $level_added = $this->prepare("SELECT level_value FROM add_levels WHERE school_name=?", array($schoolname));
                  while($levels_added = $level_added->fetch()){

                     ?>


                            <table class="addedLevel">

                                <tr>
                               <td><input type="text" name="checkUpload" value="<?php echo $levels_added['level_value'];?>">
                               <p><?php echo $levels_added['level_value'];?></p>
                               </td>
                            </tr>

                            </table>

                     <?php

                  }


               ?>

              <input type="submit" name="uploadSchool" value="UPLOAD" id="uploadButt">

            </form>

         </div>

          <?php

          if(isset($_POST['uploadSchool'])){


            $school_name = htmlspecialchars($_POST['school']);
            $adress = htmlspecialchars($_POST['adress']);
            $street_number = htmlspecialchars($_POST['street_num']);
            $zip_code = htmlspecialchars($_POST['zip']);
            $district = htmlspecialchars($_POST['district']);
            $telephone = htmlspecialchars($_POST['telnr']);
            $email = htmlspecialchars($_POST['email']);
            $web_site = htmlspecialchars($_POST['website']);
            $private = htmlspecialchars($_POST['private']);
            $concept = htmlspecialchars($_POST['concept']);
            $special = htmlspecialchars($_POST['special']);
            $basic = htmlspecialchars($_POST['basic']);
            $tto = htmlspecialchars($_POST['tto']);
            $sport = htmlspecialchars($_POST['sport']);
            $tech = htmlspecialchars($_POST['tech']);
            $spanish = htmlspecialchars($_POST['spanish']);
            $art = htmlspecialchars($_POST['art']);


              $this->prepare("INSERT INTO online(schoolname, adress, zipcode, street_number, district, telnr, email, website, private, concept, specials, tto, sport, technologie, spanish, basis, art) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
              array($school_name, $adress, $zip_code, $street_number, $district, $telephone, $email, $web_site, $private, $concept, $special, $tto,$sport,$tech,$spanish,$basic,$art));

                $this->succes("Geupload");


          }else{


          }


           ?>

         <script type="text/javascript">

             window.addEventListener("load", function(){


                 var datas = document.getElementById("datas");
                 var data = document.getElementById("data");
                 var uploadButt = document.getElementById("uploadButt");
                 var addedLevel = document.querySelectorAll(".addedLevel");

                 var tableLevel = document.createElement("div");
                 tableLevel.className = "tableNiv";

                 var fieldset = document.createElement("fieldset");
                 fieldset.className = 'level';

                 var legend = document.createElement("legend");
                 legend.className = 'levelLegend';
                 legend.innerHTML = "Bijhorende Niveau";
                 //fieldset.innerHTML = "Bijhorende Niveau";

                 for(var i = 0; i < addedLevel.length; i++){

                     var addedLevelArr = addedLevel[i];
                     tableLevel.appendChild(addedLevelArr);

                 }


                 fieldset.appendChild(tableLevel);


                 fieldset.appendChild(legend);

                 datas.appendChild(data);
                 datas.appendChild(fieldset);
                 //datas.insertBefore(uploadButt,fieldset);

             })

          </script>

       <?php


      }


   }

   public function display_online(){

    if(isset($_POST['upload'])){


      if(isset($_POST['uploadSchool'])){


        $school_name = htmlspecialchars($_POST['school']);
        $adress = htmlspecialchars($_POST['adress']);
        $street_number = htmlspecialchars($_POST['street_num']);
        $zip_code = htmlspecialchars($_POST['zip']);
        $district = htmlspecialchars($_POST['district']);
        $telephone = htmlspecialchars($_POST['telnr']);
        $email = htmlspecialchars($_POST['email']);
        $web_site = htmlspecialchars($_POST['website']);
        $private = htmlspecialchars($_POST['private']);
        $concept = htmlspecialchars($_POST['concept']);
        $special = htmlspecialchars($_POST['special']);
        $basic = htmlspecialchars($_POST['basic']);
        $tto = htmlspecialchars($_POST['tto']);
        $sport = htmlspecialchars($_POST['sport']);
        $tech = htmlspecialchars($_POST['tech']);
        $spanish = htmlspecialchars($_POST['spanish']);
        $art = htmlspecialchars($_POST['art']);


          $this->prepare("INSERT INTO online(schoolname, adress, zipcode, street_number, district, telnr, email, website, private, concept, specials, tto, sport, tech, spanish, basis, art) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
          array($school_name, $adress, $street_number, $zip_code, $district, $telephone, $email, $web_site, $private, $concept, $special, $tto,$sport,$tech,$spanish,$basic,$art));

          echo "Geupload";


      }else{

        echo "error";
      }


   }

 }

 }

 ?>
