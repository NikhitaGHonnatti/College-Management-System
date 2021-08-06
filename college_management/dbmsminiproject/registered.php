<?php
include "./connect.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $emails = $_POST["email"];
    $psws = $_POST["psw"];
    $encrypted_pass = md5($psws);
    $cpsws = $_POST["cpsw"];
	$usn = $_POST["usn"];
    $first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$department = $_POST["department"];
	$semester = $_POST["semester"];
    if($psws == $cpsws){
        $query = "INSERT INTO `users` (`id`, `usn`, `first_name`, `last_name`, `email`, `password`, `department`, `semester`) VALUES (NULL, '$usn', '$first_name', '$last_name', '$emails', '$encrypted_pass', '$department', '$semester') ";
        $query_exe = mysqli_query($connection, $query);
        echo "your data have been stored";
    } else {
        echo "Passwords are not matching";
    }


}
 else
 echo "we couldnt store the data ";

 ?>