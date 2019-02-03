<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'db_restaurant');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$email    = "";
	$phone  = "";
	$date  = "";
	


	$update = false;

	if (isset($_POST['save'])) {
		$id = $_POST['id'];
		
		$name = $_POST['name'];
		$email  =$_POST['email'];
		$address  =$_POST['address'];
		$phone  =  $_POST['phone'];
		$date1  =  $_POST['date'];
		
        $date2=date("Y-m-d",strtotime($date1));
        
		mysqli_query($db, "INSERT INTO td_employ (name, email, address,phone,date) 
					  VALUES('$name', '$email', '$address','$phone','$date2 ')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: employ-info-table.php');
	}


	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$quantity =$_POST['quantity'];
		$name = $_POST['name'];
		$email  =$_POST['email'];
		$address  =$_POST['address'];
		$phone  =  $_POST['phone'];
		$date1  =  $_POST['date'];
		$item  = $_POST['item'];
		$price  = $_POST['price'];
        $date2=date("Y-m-d",strtotime($date1));

		mysqli_query($db, "UPDATE td_employ SET name='$name', address='$address',email='$email', phone='$phone',date='$date2' WHERE id=$id");
		$_SESSION['message'] = "Address updated!"; 
		header('location: employ-info-table.php');
	}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM td_employ WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: employ-info-table.php');
}


	$results = mysqli_query($db, "SELECT * FROM td_employ");


?>