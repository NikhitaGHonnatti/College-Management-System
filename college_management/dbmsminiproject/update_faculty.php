<?php

 include 'connect.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $first_name = $_POST['first_name'];
 $email = $_POST['email'];
 $department = $_POST['department'];
 $q = " update faculty set id=$id, first_name='$first_name', email='$email', department='$department' where id=$id  ";

 $query = mysqli_query($connection,$q);

 header('location:display_faculty.php');
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

 <label> First name: </label>
 <input type="text" name="first_name" class="form-control"> <br>
 
 <label> email: </label>
 <input type="text" name="email" class="form-control"> <br>
 
 <label> Department: </label>
 <input type="text" name="department" class="form-control"> <br>
 
 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
 
 <div class="container signin">
    <p>Forgot password ? <a href="faculty_forgot.php">Reset Here</a>.</p>
 </div>

 </div>
 </form>
 </div>
</body>
</html>