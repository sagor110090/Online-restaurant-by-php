<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
	 
          <link rel="stylesheet" type="text/css" href="css/login.css">
       

          <!-- Bootstrap core CSS -->
          <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

          <!-- Custom styles for this template -->
          <link href="css/thumbnail-gallery.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><!-- Navigation -->
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
	<div class="header">
		<h2>ORDER</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Quantity</label>
			<input type="number" max="10" min="1" name="quantity" placeholder="Enter " value="<?php echo $quantity; ?>" required="required">
		</div>
		<div class="input-group">
			<label>Date</label>
			<input type="date" name="date" placeholder="Enter date" value="<?php echo $date; ?>" required="required">
		</div>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" placeholder="Enter name"  value="<?php echo $name; ?>"  required="required">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" placeholder="Enter email "name="email" value="<?php echo $email; ?>" required="required">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" placeholder="Enter address "name="address" value="<?php echo $address; ?>" required="required">
		</div>
		<div class="input-group">
			<label>Phone No</label>
			<input type="text"   placeholder="Enter phone "name="phone" value="<?php echo $phone; ?>"  required="required">
		</div>
  
		<div class="input-group">
			<button type="submit" class="btn"   name="order_user">Order</button>
		</div>
		
	</form>
</body>
</html>