
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
             header("Location: admin?id=".$_SESSION['id']);

          }else{

            $this->error("Gebruikersnaam of Wachtwoord niet correct");

          }

        }else{

            $this->error("Alles Invulen");

        }

      }

   }


  }


 ?>
