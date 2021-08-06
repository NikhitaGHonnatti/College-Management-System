<?php

include 'connect.php';

if(isset($_POST['done'])){

    $emails = $_POST["email"];
    $psws = $_POST["psw"];
    $encrypted_pass = md5($psws);
    $cpsws = $_POST["cpsw"];
	$usn = $_POST["usn"];
    $first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$department = $_POST["department"];
	$semester = $_POST["semester"];
    $email_check_query = "SELECT * FROM users WHERE email='$emails'";
    $email_check_query_exec = mysqli_query($connection, $email_check_query);
    $num_of_rows_matching = mysqli_num_rows($email_check_query_exec);
    if($num_of_rows_matching > 0){
        echo "<div class=\"alert alert-danger\" role=\"alert\">
        Email already in use
      </div>";
    } else {

    if($psws == $cpsws){
        $query = "INSERT INTO `users` (`id`, `usn`, `first_name`, `last_name`, `email`, `password`, `department`, `semester`) VALUES (NULL, '$usn', '$first_name', '$last_name', '$emails', '$encrypted_pass', '$department', '$semester') ";
        $query_exe = mysqli_query($connection, $query);
        echo "<div class=\"alert alert-success\" role=\"alert\">
        Registration successful
      </div>";
    } else {
        echo "<div class=\"alert alert-danger\" role=\"alert\">
        Passwords do not match
      </div>";
    }
    }

 
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Add Student</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Add Student </h1>
 </div><br>
<div class="form-group">
            <label for="exampleFormControlInput1"><b>Student usn</b></label>
            <input type="text" class="form-control" name="usn" id="exampleFormControlInput1" placeholder="Your usn" required>
          </div>
 <div class="form-group">
            <label for="exampleFormControlInput1"><b>First Name</b></label>
            <input type="text" class="form-control" name="first_name" id="exampleFormControlInput1" placeholder="Your name" required>
          </div>
		  <div class="form-group">
            <label for="exampleFormControlInput1"><b>Last Name</b></label>
            <input type="text" class="form-control" name="last_name" id="exampleFormControlInput1" placeholder="Your last name" required>
          </div>
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" class="form-control" id="email" required>
          <p id="email_error_text"></p>
		  
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" class="form-control" id="psw" required>
		  <p id="error_text"></p>
      
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="cpsw" class="form-control" id="psw-repeat" required>
          <p id="error_text"></p>
		  
		  <div class="form-group">
            <label for="exampleFormControlInput1"><b>Department</b></label>
            <input type="text" class="form-control" name="department" id="exampleFormControlInput1" placeholder="department" required>
          </div>
		  
		  <div class="form-group">
            <label for="exampleFormControlInput1"><b>Semester</b></label>
            <input type="text" class="form-control" name="semester" id="exampleFormControlInput1" placeholder="semester" required>
          </div>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>
