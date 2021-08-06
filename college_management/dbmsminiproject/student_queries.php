<?php

include 'connect.php';

if(isset($_POST['done'])){

    $usn = $_POST["usn"];
    $name = $_POST["name"];
    $message = $_POST["message"];
	
	
	$q = " INSERT INTO `student_queries`(`id`, `usn`, `name`, `message`) VALUES (NULL, '$usn', '$name', '$message' )";

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
        <h1 class="text-white text-center">Student Queries</h1>
    </div><br>

    <div class="form-group">
        <label for="exampleFormControlInput1"><b>usn</b></label>
        <input type="text" class="form-control" name="usn" id="exampleFormControlInput1" placeholder="Your usn" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1"><b>name</b></label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Your name" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1"><b>message</b></label>
        <input type="text" class="form-control" name="message" id="exampleFormControlInput1" placeholder="Your Message" required>
    </div>
	
	
	
	
    <button class="btn btn-primary" type="submit" name="done">Submit</button>
	
</div>
 </form>
 </div>
</body>
</html>