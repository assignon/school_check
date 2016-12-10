<?php
//include 'includes/connect.php';
//Voor de online versie:
include 'includes/connect_host.php';
include 'views/head.php';
include 'views/menu.php';
$action = isset($_GET['action'])?$_GET['action']:'home';
include 'views/intro.php';
switch($action){
    case 'home':
        include 'views/content.php';
        break;
    case 'vind':
        include 'views/content-vind.php';
        break;
    case 'bekijk':
        include 'views/content-bekijk.php';
        break;
    case 'resultaat':
        include 'model/select-vind.php';
        break;
    case 'open':
        include 'views/content-opendag.php';
        break;
    case 'school':
        include 'views/schools.php';
        break;
    case 'openschool':
        include 'views/open-een-school.php';
        break;
}
include 'views/footer.php';


?>




<!--.php?schoolname=' . $schoolName . '&schoolid=' . $row['id'] . '">'
   -->
