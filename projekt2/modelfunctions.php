<?php

function test_input($data) {
    $data =trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
  return $data;
};

$servername = "localhost";
$dbname = "lintulka";
$username = "lintulka";
include "model_hemlis.php";

$conn = new PDO("mysql:host=".$servername. ";dbname=".$dbname.";charset=UTF8",$username,$password);

?>