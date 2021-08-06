<?php

include 'connect.php';

$id = $_GET['id'];

$q = " DELETE FROM `iamarks` WHERE id = $id ";

mysqli_query($connection, $q);

header('location:display_marks.php');

?>