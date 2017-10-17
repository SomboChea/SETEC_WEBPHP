<?php

require "./include/config.db.php";

$table = isset($_GET['table'])?$_GET['table']:null;

if($table!=null) {
    //$rex = $dbh->query("SELECT * FROM category;");
    var_dump(getTable($table));
}

?>