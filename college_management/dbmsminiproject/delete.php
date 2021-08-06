<?php

include 'connect.php';

$id = $_GET['id'];

$q = " DELETE FROM `users` WHERE id = $id ";

mysqli_query($connection, $q);

header('location:display.php');

?>