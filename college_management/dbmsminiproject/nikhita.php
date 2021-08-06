<html>
    <head>
        <title> College Management System</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <section class="header">
            <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="images\bmsitlogo.jpg"</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <a href = "policy.php">
	                    <button type="button" class="btn btn-success" style="margin-right:4px">POLICY</button>
	                    </a>
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" style="margin-right:4px" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SIGN UP
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="register.php">Student</a>
                                <a class="dropdown-item" href="faculty_register.php">Faculty</a>
								<a class="dropdown-item" href="admin_register.php">Admin</a>
                            </div>
                        </div>
						<div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" style="margin-right:4px" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            LOGIN
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="login.php">Student</a>
                                <a class="dropdown-item" href="faculty_login.php">Faculty</a>
								<a class="dropdown-item" href="admin_login.php">Admin</a>
                            </div>
                        </div>
						<a href = "aboutus.php">
	                    <button type="button" class="btn btn-success" style="margin-right:4px">ABOUT US</button>
	                    </a>
						<a href = "contact.php">
	                    <button type="button" class="btn btn-success" style="margin-right:4px">CONTACT US</button>
	                    </a>
	  
    </ul>
      <ul class="right-menu ml-auto">
          <li><i class="fa fa-facebook"></i></li>
          <li><i class="fa fa-instagram"></i></li>
          <li><i class="fa fa-pinterest"></i></li>  
          <li>
              <div class="input-group mb-3">
                 <input type="text" class="form-control" placeholder="SEARCH">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
               </div>
          </li>
      </ul>
  </div>
</nav>
                <div class="banner">
                    <div class="banner-img">
                         <img src="images\bmsit.jpg">
                    </div>
                    <div class="banner-title">
                        <h1>College Management</h1>
                        <h1>System</h1>
                    </div>
                </div>
        </section>   
    </body>  
</html>