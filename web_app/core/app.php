<?php


   class app{

     protected $controller = "welcom";
     private $methods = "index";
     private $params = [];

     public function __construct(){

        $url = $this->parseUrl();
        if(file_exists("../web_app/controllers/".$url[0].".php")){

           $this->controller = $url[0];
           unset($url[0]);

        }

        require ("../web_app/controllers/".$this->controller.".php");
        $this->controller = new $this->controller;


        if(isset($url[1])){

          if(method_exists($this->controller,$url[1])){

             $this->methods = $url[1];
            unset($url[1]);

          }
        }

       $this->params = $url?array_values($url):[];

     call_user_func_array([$this->controller,$this->methods],$this->params);

     }

       public function parseUrl(){


           if(isset($_GET["url"])){

              return explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));

           }


       }


   }

 ?>
