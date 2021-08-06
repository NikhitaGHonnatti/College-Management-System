<?php
include "./connect.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $emails = $_POST["email"];
    $psws = $_POST["psw"];
    $encrypted_pass = md5($psws);
    $cpsws = $_POST["cpsw"];
    if($psws == $cpsws){
        $query = "INSERT INTO `admin` (`id`, `email`, `password`) VALUES (NULL, '$emails', '$encrypted_pass) ";
        $query_exe = mysqli_query($connection, $query);
        echo "your data have been stored";
    } else {
        echo "Passwords are not matching";
    }


}
 else
 echo "we couldnt store the data ";

 ?>