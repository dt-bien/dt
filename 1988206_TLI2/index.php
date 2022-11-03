<?php

$page = "";
$active = "";
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
switch ($page) {

    case '':
        # code...
        $title = "Home page";
        $active='home';
        
        include('home.php');
        break;
    case 'home':
        # code...
        $title = "Home page";
        $active='home';
        include('home.php');
        break;
    case 'mygradle':
        # code...
        $active='mygradle';
        include('mygradle.php');
        break;
    
    default:
        # code...
        break;
}

function include_homepage () {
   
    include('home.php');
}

?>