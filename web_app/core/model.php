<?php

  class model{

  private $pdo;

   public function __construct()
    {

    }

    public function getPDO(){

      if( $this->pdo === null){

          $this->pdo= new PDO("mysql:host=localhost;dbname=schoolcheck_cms",'root','');
          $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      }

      return  $this->pdo;
    }


    protected function error($error){
        ?>

        <script type="text/javascript">

        var error = document.getElementById("error");
        error.innerHTML = "<?php echo $error ?>";
        error.style.color = "crimson";
        //error.style.marginTop: '10px';
        //error.style.marginBottom: '10px';
        //error.style.top = '10px';

        </script>
      <?php

      }

      protected function succes($succes){
          ?>

          <script type="text/javascript">

          var error = document.getElementById("error");
          error.innerHTML = "<?php echo $succes ?>";
          error.style.color = "#00D636";
          //error.style.marginTop: '10px';
          //error.style.marginBottom: '10px';
          //error.style.top = '10px';

          </script>
        <?php

        }



      protected function prepare($statement,$data_array){

         $prepare_request = $this->getPDO()->prepare($statement);
         $prepare_request->execute($data_array);
           return $prepare_request;


       }


       protected function prepare_fetch($statement,$data_array)
       {

           $request = $this->getPDO()->prepare($statement);
           $request->execute($data_array);
           $data = $request->fetch();
           return $data;


       }

       public function POST($post){

          if(isset($_POST[$post])){

             return $_POST[$post];

          }

       }


  }

 ?>
