<?php

include 'connect.php';

if(isset($_POST['done'])){

    $usn = $_POST["usn"];
    $name = $_POST["name"];
    $fees = $_POST["fees"];
	
	
	$q = " INSERT INTO `fees`(`id`, `usn`, `name`, `fees`) VALUES (NULL, '$usn', '$name', '$fees' )";

    $query = mysqli_query($connection,$q);
	echo "<div class=\"alert alert-success\" role=\"alert\">
        Fees added successfully
      </div>";
    
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Add Fees</title>

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
 <h1 class="text-white text-center">  Add Fees </h1>
 </div><br>

 <div class="form-group">
            <label for="exampleFormControlInput1"><b>usn</b></label>
            <input type="text" class="form-control" name="usn" id="exampleFormControlInput1" placeholder="Your name" required>
          </div>
		  <div class="form-group">
            <label for="exampleFormControlInput1"><b>name</b></label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Your last name" required>
          </div>
		  <div class="form-group">
            <label for="exampleFormControlInput1"><b>fees</b></label>
            <input type="tel" class="form-control" name="fees" id="exampleFormControlInput1" placeholder="Your last name" required>
          </div>
		  
		  
 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>