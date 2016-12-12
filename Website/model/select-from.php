<?php

//$pdo = new PDO("mysql: host=localhost;dbname=schoolcheck_cms",'root'.'');
$pdo = new PDO("mysql: host=mysql.hostinger.fr;dbname=u646001124_check",'u646001124_yan','serges007');


$schools = $pdo->query("SELECT count(id) as nschools FROM online");
$schools_fetch = $schools->fetch();

$nschools = $schools_fetch['nschools'];
$perPagina = 10;
//$currentPage = 1;

$aantal_Pagina = ceil($nschools /  $perPagina);

if(isset($_GET['p']) AND $_GET['p'] > 0 AND $_GET['p'] <= $aantal_Pagina){

  $huidig_pagina = $_GET['p'];

}else{

   $huidig_pagina = 1;

}




$limit =  (($huidig_pagina-1)*$perPagina);

$sql = "SELECT * FROM online ORDER BY id DESC LIMIT $limit".",$perPagina";

$result = $conn->query($sql);



?>
