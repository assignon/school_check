<?php
define ('DB_HOST', 'localhost');
define ('DB_NAME' ,'schoolkeuze');
define ('DB_USERNAME', 'root');
define ('DB_PASSWORD', '');

$conn = mysqli_connect('localhost', 'root', '', 'school_cms');

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}


?>