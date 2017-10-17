<?php

$dsn = "mysql:host=localhost;dbname=dbsabay;charset=utf8";
$username = "root";
$password = "";

$optios = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

try {
    $dbh = new PDO($dsn,$username,$password,$optios);
} catch (PDOException $e) {
    echo "Error! " . $e->getMessage();
    die();
}

//$dbh->exec("set names utf8");

function getTable($table) {
    global $dbh;
    return $dbh->query("SELECT * FROM $table;")->fetchAll();
}

?>