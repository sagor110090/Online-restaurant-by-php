<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
	 
  <link rel="stylesheet" type="text/css" href="login.css">
 

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
</head>
<body>
	    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Restaurant Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
			
			<li class="nav-item">
              <a class="nav-link" href="#">Booking</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      
    <div class="login_form">


<div class="customer_logo">
<img src="logo.png">
<h1>Login</h1>

</div>
<div class="form">
<form method="post" action="login.php">

<p>User Name</p>
<input type="text" name="username" placeholder="Enter your user Name">
<p>Password</p>
<input type="Password" name="password" placeholder="Enter your Password">
<input type="submit" name="login_user" value="login">
<p>
      For New Members? <a href="register.php">Sign up</a>
    </p>
</form>

</div>



</div>
	
</div>
</body>
</html>