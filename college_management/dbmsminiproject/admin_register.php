<?php
include "./connect.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $emails = $_POST["email"];
    $psws = $_POST["psw"];
    $encrypted_pass = md5($psws);
    $cpsws = $_POST["cpsw"];
    $email_check_query = "SELECT * FROM admin WHERE email='$emails'";
    $email_check_query_exec = mysqli_query($connection, $email_check_query);
    $num_of_rows_matching = mysqli_num_rows($email_check_query_exec);
    if($num_of_rows_matching > 0){
        echo "<div class=\"alert alert-danger\" role=\"alert\">
        Email already in use
      </div>";
    } else {

    if($psws == $cpsws){
        $query = "INSERT INTO `admin` (`id`, `email`, `password`) VALUES (NULL, '$emails', '$encrypted_pass') ";
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
<title>Admin Registration</title>  
 </head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<body>
<form id="form" action="" method = 'post' >
    <nav>
	 <a href="register.php">
       <button type="button" class="btn btn-primary btn-lg" style="float: right">Student</button>
     </a>
	    
	</nav>
        <div class="container">
          <h1>Admin Registration</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" class="form-control" id="email" required>
          <p id="email_error_text"></p>
		  
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" class="form-control" id="psw" required>
		  <p id="error_text"></p>
      
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="cpsw" class="form-control" id="psw-repeat" required>
          <p id="error_text"></p>
		  
          <hr>
          
      
          <p>By creating an account you agree to our <a href="policy.php">Terms & Privacy</a>.</p>
          <button id="submit_button" type="submit" class="btn btn-success">Register</button>
         
          <button id="submit_button" type="submit" class="btn btn-warning">Not now</button>
		  <p></p>
		  <div class="container signin">
         <p> Already have an account? <a href="admin_login.php">Sign in</a>.</p>
        </div>
		  
		  <p></p>
		  <div class="alert alert-primary" role="alert">
           Have a great day!
          </div>
		  
        </div>
      
        
        
      </form>
    </body>
    <script src="./script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      </html>