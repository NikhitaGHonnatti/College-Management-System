<?php
    require('connect.php');
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["email"];
        $new_password = $_POST["new_psw"];
        $new_encrypted_password = md5($new_password);
        $query = "UPDATE users SET password='$new_encrypted_password' WHERE email='$email'";
        $query_exec = mysqli_query($connection, $query);
        if($query_exec){
            echo "<div class=\"alert alert-success\" role=\"alert\">
            Password changed successfully
          </div>";
        } else {
            echo "<div class=\"alert alert-danger\" role=\"alert\">
            Failed to change password
          </div>";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
<title>Login form</title>  
 </head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<body>
    
<form action="" method = 'post' >
        <div class="container">
          <h1>Forgot Password</h1>
          <hr>
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" class="form-control" id="email" required>
      
          <label for="psw"><b>New Password</b></label>
          <input type="password" placeholder="Enter New Password" name="new_psw" class="form-control" id="psw" required>
    
          <button type="submit" class="btn btn-success">Reset Password</button>
         
        </div>
      
        <div class="container signin">
          <p>Don't have an account? <a href="register.php">Sign Up</a>.</p>
        </div>
        
      </form>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      </html>