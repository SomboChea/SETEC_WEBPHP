<?php

    $view = null;
    $error_msg = null;

    if(isset($_GET['view']) && !empty($_GET['view'])) {
        $view = $_GET['view'];
    } else {
        $error_msg = "Not Found!";
    }

    //header
    include_once "./views/header.php";
    //menu
    include_once "./views/menu.php";
    //slideshow
    //home
    include_once "./views/home.php";

    //START BODY

    if(!isset($error_msg)) {
        include_once "views/".$view.".php";
    } else {
        //echo $error_msg;
        
    }

    include_once "./views/slidebar.php";

    
    //END BODY


    //footer
    include_once "./views/footer.php";

?>