<?php

include 'connect.php';

if(isset($_POST['done'])){

    $first_name = $_POST["first_name"];
    $company = $_POST["company"];
    $email = $_POST["email"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];
	
	$q = " INSERT INTO `contactus`(`id`, `first_name`, `company`, `email`, `phone`, `message`) VALUES (NULL, '$first_name', '$company', '$email', '$phone', '$message' )";

    $query = mysqli_query($connection,$q);
	echo "<div class=\"alert alert-success\" role=\"alert\">
        Message sent successfully
      </div>";
    
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Contact Us</title>

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
        <h1 class="text-white text-center">Contact Us</h1>
    </div><br>

    <div class="form-group">
        <label for="exampleFormControlInput1"><b>First Name</b></label>
        <input type="text" class="form-control" name="first_name" id="exampleFormControlInput1" placeholder="Your name" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1"><b>Company</b></label>
        <input type="text" class="form-control" name="company" id="exampleFormControlInput1" placeholder="Your company" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1"><b>Email</b></label>
        <input type="text" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Your email" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1"><b>Phone</b></label>
        <input type="tel" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="Your phno" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1"><b>Message</b></label>
        <input type="text" class="form-control" name="message" id="exampleFormControlInput1" placeholder="Your Message" rows="4" required>
    </div>
	
	
	
	
    <button class="btn btn-primary" type="submit" name="done">Submit</button>
	
</div>
 </form>
 </div>
</body>
</html>
