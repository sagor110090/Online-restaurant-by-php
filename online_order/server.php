<?php 
	session_start();

	// variable declaration
	$quantity = "";
	$email    = "";
	$name  = "";
	$address  = "";
	$phone  = "";
	$date  = "";
	$item  = "";
	$price  = "";
    
	$errors = array(); 
	$_SESSION['success'] = "";
    
    

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'db_restaurant');


	if (isset($_POST['order_user'])) {
		// receive all input values from the form
		$quantity = mysqli_real_escape_string($db, $_POST['quantity']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email  = mysqli_real_escape_string($db, $_POST['email']);
		$address  = mysqli_real_escape_string($db, $_POST['address']);
		$phone  = mysqli_real_escape_string($db, $_POST['phone']);
		$date1  = mysqli_real_escape_string($db, $_POST['date']);
		$item  = mysqli_real_escape_string($db, $_POST['item']);
		$price  = mysqli_real_escape_string($db, $_POST['price']);
         

	
		$date2=date("Y-m-d",strtotime($date1));
		
			$query = "INSERT INTO td_orders (name, email, address,phone,item,quantity,price,date) 
					  VALUES('$name', '$email', '$address','$phone', '$item','$quantity','$price','$date2 ')";
			mysqli_query($db, $query);

			
			header('location: index.php');
		
	}


	

	


?>