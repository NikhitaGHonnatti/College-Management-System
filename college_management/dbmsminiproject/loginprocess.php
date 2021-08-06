<?php
    require('connect.php');
    $email = $_POST["email"];
    $password = $_POST["psw"];
    $encrypted_password = md5($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$encrypted_password'";
    $query_exec = mysqli_query($connection, $query);
    $num_of_rows_matching = mysqli_num_rows($query_exec);
    if($num_of_rows_matching > 0){
        echo "Login successful";
    } else {
        echo "Login failed";
    }
    if($query_exec){
        echo "<br />Query performed successfully";
    }
?>