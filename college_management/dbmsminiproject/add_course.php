<?php

include 'connect.php';

if(isset($_POST['done'])){

    $course_name = $_POST["course_name"];
    $course_code = $_POST["course_code"];
    $course_credits = $_POST["course_credits"];
	$department = $_POST["department"];
	$semester = $_POST["semester"];
	
	$q = " INSERT INTO `course`(`id`, `course_name`, `course_code`, `course_credits`, `department`, `semester`) VALUES (NULL, '$course_name', '$course_code', '$course_credits', '$department', '$semester' )";

    $query = mysqli_query($connection,$q);
	echo "<div class=\"alert alert-success\" role=\"alert\">
        Course added successfully
      </div>";
    
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Add Course</title>

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
 <h1 class="text-white text-center">  Add Course </h1>
 </div><br>

 <div class="form-group">
            <label for="exampleFormControlInput1"><b>Course name</b></label>
            <input type="text" class="form-control" name="course_name" id="exampleFormControlInput1" placeholder="Your name" required>
          </div>
		  <div class="form-group">
            <label for="exampleFormControlInput1"><b>Course_code</b></label>
            <input type="text" class="form-control" name="course_code" id="exampleFormControlInput1" placeholder="Your last name" required>
          </div>
		  <div class="form-group">
            <label for="exampleFormControlInput1"><b>Course_credits</b></label>
            <input type="text" class="form-control" name="course_credits" id="exampleFormControlInput1" placeholder="Your last name" required>
          </div>
		  
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
