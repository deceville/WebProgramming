<?php
	if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = "INSERT INTO user(first_name, last_name, email, password) VALUES('$first_name', '$last_name', '$email', '$password')";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1 Record Added!";
	}
?>