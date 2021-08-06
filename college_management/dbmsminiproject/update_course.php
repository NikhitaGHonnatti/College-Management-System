<?php

 include 'connect.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $course_name = $_POST["course_name"];
 $course_code = $_POST["course_code"];
 $course_credits = $_POST["course_credits"];
 $department = $_POST["department"];
 $semester = $_POST["semester"];

 $q = " update course set id=$id, course_name='$course_name', course_code='$course_code', course_credits='$course_credits', department='$department', semester='$semester' where id=$id  ";

 $query = mysqli_query($connection,$q);

 header('location:display_course.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

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
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

 <label> Course name: </label>
 <input type="text" name="course_name" class="form-control"> <br>
 
 <label> Course code: </label>
 <input type="text" name="course_code" class="form-control"> <br>
 
 <label> Course credits: </label>
 <input type="text" name="course_credits" class="form-control"> <br>
 
 <label> Department: </label>
 <input type="text" name="department" class="form-control"> <br>
 
 <label> Semester: </label>
 <input type="text" name="semester" class="form-control"> <br>
 
 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
 
 <div class="container signin">
    <p>Forgot password ? <a href="faculty_forgot.php">Reset Here</a>.</p>
 </div>

 </div>
 </form>
 </div>
</body>
</html>