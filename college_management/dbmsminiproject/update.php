<?php

 include 'connect.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $usn = $_POST['usn'];
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $email = $_POST['email'];
 $department = $_POST['department'];
 $semester = $_POST['semester'];
 $q = " update users set id=$id, usn='$usn', first_name='$first_name', last_name='$last_name', email='$email', department='$department', semester='$semester' where id=$id  ";

 $query = mysqli_query($connection,$q);

 header('location:display.php');
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

<label> USN: </label>
<input type="text" name="usn" class="form-control"> <br>
 
 <label> First name: </label>
 <input type="text" name="first_name" class="form-control"> <br>
 
  <label> Last name: </label>
 <input type="text" name="last_name" class="form-control"> <br>
 
 <label> email: </label>
 <input type="text" name="email" class="form-control"> <br>
 
 <label> Department: </label>
 <input type="text" name="department" class="form-control"> <br>
 
 <label> Semester: </label>
 <input type="text" name="semester" class="form-control"> <br>
 

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
 
 <div class="container signin">
    <p>Forgot password ? <a href="forgot.php">Reset Here</a>.</p>
 </div>

 </div>
 </form>
 </div>
</body>
</html>