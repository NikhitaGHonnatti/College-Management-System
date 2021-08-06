<?php

include 'connect.php';

if(isset($_POST['done'])){

    $ia1 = $_POST["ia1"];
	$ia2 = $_POST["ia2"];
	$ia3 = $_POST["ia3"];
	$usn = $_POST["usn"];
	$course_code = $_POST["course_code"];
	
	$q = " INSERT INTO `iamarks`(`id`, `ia1`, `ia2`, `ia3`, `usn`, `course_code`) VALUES (NULL, '$ia1', '$ia2', '$ia3', '$usn', '$course_code' )";

    $query = mysqli_query($connection,$q);
	
	echo "<div class=\"alert alert-success\" role=\"alert\">
        marks added successfully
      </div>";

    

 
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Add marks</title>

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
            <h1 class="text-white text-center">  Add Student marks </h1>
        </div><br>
        <div class="form-group">
            <label for="exampleFormControlInput1"><b>Student usn</b></label>
            <input type="text" class="form-control" name="usn" id="exampleFormControlInput1" placeholder="Your usn" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1"><b>ia1 marks</b></label>
            <input type="text" class="form-control" name="ia1" id="exampleFormControlInput1" placeholder="ia1 marks" required>
        </div>
		<div class="form-group">
            <label for="exampleFormControlInput1"><b>ia2 marks</b></label>
            <input type="text" class="form-control" name="ia2" id="exampleFormControlInput1" placeholder="ia2 marks" required>
        </div>
	    <div class="form-group">
            <label for="exampleFormControlInput1"><b>ia3 marks</b></label>
            <input type="text" class="form-control" name="ia3" id="exampleFormControlInput1" placeholder="ia3 marks" required>
        </div>
          
		<div class="form-group">
            <label for="exampleFormControlInput1"><b>Course code</b></label>
            <input type="text" class="form-control" name="course_code" id="exampleFormControlInput1" placeholder="course code" required>
        </div>

        <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

    </div>
    </form>
 </div>
</body>
</html>