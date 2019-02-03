<?php 
	session_start();

	// variable declaration
	$quantity = "";
	$email    = "";
	$name  = "";
	$address  = "";
	$phone  = "";
	$date  = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'sagor');


	if (isset($_POST['order_user'])) {
		// receive all input values from the form
		$quantity = mysqli_real_escape_string($db, $_POST['quantity']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email  = mysqli_real_escape_string($db, $_POST['email']);
		$address  = mysqli_real_escape_string($db, $_POST['address']);
		$phone  = mysqli_real_escape_string($db, $_POST['phone']);
		$date  = mysqli_real_escape_string($db, $_POST['date']);
         

	
		
		
			$query = "INSERT INTO orders (name, email, address,phone,quantity,date) 
					  VALUES('$name', '$email', '$address','$phone', '$quantity', '$date')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $name;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		
	}


	

	


?>