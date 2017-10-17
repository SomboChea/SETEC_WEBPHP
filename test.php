<?php

require "./include/config.db.php";

$table = isset($_GET['table'])?$_GET['table']:null;
$cate = isset($_GET['cate'])?$_GET['cate']:null;

if($table!=null) {
    //$rex = $dbh->query("SELECT * FROM category;");
    var_dump(getTable($table));
}

if($cate!=null) {
    var_dump(getPostsByCate($cate));
}

?>