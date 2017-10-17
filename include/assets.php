<?php

define("HOST",$_SERVER['HTTP_HOST']);
define("SUB_HOST","SETEC");

function getCSS($file) {
    echo 'http://'.HOST.'/'.SUB_HOST.'/assets/css/'.$file.'.css';
}

function getJS($file) {
    echo 'http://'.HOST.'/'.SUB_HOST.'/assets/js/'.$file.'.js';
}

function getFont($file) {
    echo 'http://'.HOST.'/'.SUB_HOST.'/assets/fonts/'.$file;
}

function getImage($file) {
    echo 'http://'.HOST.'/'.SUB_HOST.'/assets/images/'.$file;
}

function getImg($file) {
    echo 'http://'.HOST.'/'.SUB_HOST.'/assets/img/'.$file;
}


?>