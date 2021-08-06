<?php
include "./connect.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $emails = $_POST["email"];
    $psws = $_POST["psw"];
    $encrypted_pass = md5($psws);
    $cpsws = $_POST["cpsw"];
    $first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$dob = $_POST["dob"];
	$department = $_POST["department"];
    if($psws == $cpsws){
        $query = "INSERT INTO `faculty` (`id`, `first_name`, `last_name`, `email`, `password`, `dob`, `department`) VALUES (NULL, '$first_name', '$last_name', '$emails', '$encrypted_pass', '$dob', '$department') ";
        $query_exe = mysqli_query($connection, $query);
        echo "your data have been stored";
    } else {
        echo "Passwords are not matching";
    }


}
 else
 echo "we couldnt store the data ";

 ?>