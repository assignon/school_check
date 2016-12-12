
<?php
session_start();
  require "../web_app/core/model.php";

  /**
   *
   */


  class login_model extends model
  {

    private $username;
    private $password;

    private $username_login;
    private $password_login;

    function __construct()
    {
      parent::__construct();
    }


    public function insert_users(){

      $this->username = htmlspecialchars('admin');
      $this->password = sha1('administrator');


      $select = $this->prepare("SELECT*FROM admin WHERE username=?", array($this->username));
      $usersCount = $select->rowCount();



         $this->prepare("INSERT INTO admin(username,password) VALUES(?,?)", array($this->username,$this->password));



    }


   public function users_inlog(){

      if(isset($_POST['logIn'])){

        $this->username_inlog = htmlspecialchars($_POST['username']);
        $this->password_inlog = sha1($_POST['password']);

        if(!empty($this->username_inlog) AND !empty($this->password_inlog)){

           $select = $this->prepare("SELECT*FROM admin WHERE username=? AND password=?", array($this->username_inlog,$this->password_inlog));

          $usersCount = $select->rowCount();

          if($usersCount > 0){

            $selectusers = $this->getPDO()->query("SELECT*FROM admin");

            $users = $selectusers->fetch();

            $_SESSION['id'] = $users['id'];
            $_SESSION['username'] = $users['username'];
            $_SESSION['password'] = $users['password'];

               $this->error("aangemaakt");
             //header("Location: admin?id=".$_SESSION['id']);
             header("Location: welcom.php?action=admin&id=".$_SESSION['id']);

          }else{

            $this->error("Gebruikersnaam of Wachtwoord niet correct");

          }

        }else{

            $this->error("Alles Invulen");

        }

      }

   }


   public function change_avatar($path_name, $uploadfile_size){

     if(isset($_POST['updateAvatar']) AND !empty($_FILES['avatar'])){

         $img_name = $_FILES['avatar']['name'];
         $img_tmp  = $_FILES['avatar']['tmp_name'];
         $img_size = $_FILES['avatar']['size'];

         $img_path = $path_name.'/'.$img_name;

         $valide_extention = array('.png','.jpg','.jpeg');
         $upload_extention = strrchr($img_name,'.');

         if(in_array($upload_extention,$valide_extention)){

            if($img_size <= $uploadfile_size){

              if(move_uploaded_file($img_tmp,$img_path)){


                  $this->prepare("UPDATE  user_avatar SET image_src=?", array($img_path));

                  $this->succes("Afbeelding Geupload");

              }else{

                $this->error("Bestaande is niet geupload");

              }

            }else{

               $this->error("Bestaande te groote (MAX: 24816MO)");

            }

         }else{

           $this->error("Bestaande Extentie niet toegestaan (Alleen PNG, JPEG EN JPG)");

         }

     }

   }

   public function display_user_avatar(){

     $select = $this->getPDO()->query("SELECT*FROM user_avatar");

     while($user_avatar = $select->fetch()){

       ?>

          <script type="text/javascript">

            window.addEventListener("load", function(){

               var avatar = document.getElementById("userAvatar");
               avatar.src = "<?php echo $user_avatar['image_src'];?>";


            })

          </script>

       <?php

     }

   }


  }


 ?>
