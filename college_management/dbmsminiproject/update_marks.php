<?php

 include 'connect.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $usn = $_POST["usn"];
 $ia1 = $_POST["ia1"];
 $ia2 = $_POST["ia2"];
 $ia3 = $_POST["ia3"];
 $course_code = $_POST["course_code"];

 $q = " update iamarks set id=$id, usn='$usn', ia1='$ia1', ia2='$ia2', ia3='$ia3', course_code='$course_code' where id=$id  ";

 $query = mysqli_query($connection,$q);

 header('location:display_marks.php');
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

 <label> usn: </label>
 <input type="text" name="usn" class="form-control"> <br>
 
 <label> ia1: </label>
 <input type="text" name="ia1" class="form-control"> <br>
 
 <label> ia2: </label>
 <input type="text" name="ia2" class="form-control"> <br>
 
 <label> ia3: </label>
 <input type="text" name="ia3" class="form-control"> <br>
 
 <label> course code: </label>
 <input type="text" name="course_code" class="form-control"> <br>
 
 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
 
 <div class="container signin">
    <p>Forgot password ? <a href="faculty_forgot.php">Reset Here</a>.</p>
 </div>

 </div>
 </form>
 </div>
</body>
</html>