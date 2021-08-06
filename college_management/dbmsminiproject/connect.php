<?php

$host = "localhost:3325";
$user = "root";
$password = "";
$database = "student";


$connection = mysqli_connect($host, $user, $password, $database);

if(!$connection) {
    die("connection failed" . mysqli_connect_error());


}

?>
