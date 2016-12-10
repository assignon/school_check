<?php
define ('DB_HOST', 'mysql.hostinger.fr');
define ('DB_NAME' ,'u646001124_check');
define ('DB_USERNAME', 'u646001124_yan');
define ('DB_PASSWORD', 'serges007');

$conn = mysqli_connect('mysql.hostinger.fr', 'u646001124_yan', 'serges007', 'u646001124_check');

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}


?>
