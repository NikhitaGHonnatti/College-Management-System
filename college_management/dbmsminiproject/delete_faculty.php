<?php

include 'connect.php';

$id = $_GET['id'];

$q = " DELETE FROM `faculty` WHERE id = $id ";

mysqli_query($connection, $q);

header('location:display_faculty.php');

?>