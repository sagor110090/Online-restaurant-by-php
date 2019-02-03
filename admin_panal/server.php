<?php 
	session_start();

	// variable declaration
	$Eemail    = "";
	$Ename  = "";
	$Eaddress  = "";
	$Ephone  = "";
	$Edate  = "";

	//login
	$Eusername = "";
	$Epassword_1="";
	$post="";


	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'db_restaurant');
    $result = mysqli_query($db,"SELECT *FROM td_orders");
    $result1 = mysqli_query($db,"SELECT SUM(PRICE) FROM td_orders");
    $result2 = mysqli_query($db,"SELECT SUM(quantity) FROM td_orders");
    $result3 = mysqli_query($db,"SELECT COUNT(*)  FROM td_orders");

	// REGISTER USER
	if (isset($_POST['reg_ad'])) {
		// receive all input values from the form
		$Eemail    = mysqli_real_escape_string($db, $_POST['Eemail']);
		$Ename  = mysqli_real_escape_string($db, $_POST['Ename']);
		$Eaddress  = mysqli_real_escape_string($db, $_POST['Eaddress']);
		$Ephone  = mysqli_real_escape_string($db, $_POST['Ephone']);
		$Edate  = mysqli_real_escape_string($db, $_POST['Edate']);

		$Eusername =mysqli_real_escape_string($db, $_POST['Eusername']);
		$password_1 = mysqli_real_escape_string($db, $_POST['Epassword_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['Epassword_2']);

		// form validation: ensure that the form is correctly filled

		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$date2=date("Y-m-d",strtotime($date1));
		
			$query = "INSERT INTO td_employ (name, email, address,phone,date) 
					  VALUES('$Ename', '$Eemail', '$Eaddress','$Ephone','$date2 ')";
			mysqli_query($db, $query);
			$query = "INSERT INTO td_login (username,password) 
					  VALUES('$Eusername', '$password_1')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $Eusername;
			
			header('location: main.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$Eusername = mysqli_real_escape_string($db, $_POST['Eusername']);
		$Epassword = mysqli_real_escape_string($db, $_POST['Epassword']);

	

		
			
			$query = "SELECT * FROM td_login WHERE username='$Eusername' AND password='$Epassword'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $Eusername;
				
			
				header('location: main.php');
			}
			
		}
	



	


?>