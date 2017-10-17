<?php

    $view = null;
    $error_msg = null;

    if(isset($_GET['view']) && !empty($_GET['view'])) {
        $view = $_GET['view'];
    } else {
        $error_msg = "Not Found!";
    }

    //Header
    include_once "./views/header.php";
    //Menu
    include_once "./views/menu.php";
    //Page
    include_once "./views/listpage.php";
    include_once "./views/categorypage.php";



    if(!isset($error_msg)) {
        include_once "views/".$view.".php";
    } else {
        //echo $error_msg;
        include_once "./views/categorypage.php";
    }

    
    //END BODY







    //footer
    include_once "./views/footer.php";

