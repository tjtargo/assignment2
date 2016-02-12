<?php //customer_add.php
		
		$hn = 'www.it354.com';
		$db = 'it354_students';
		$un = 'it354_students';
		$pw = 'steinway';
		
		$conn = mysqli_connect($hn, $db, $un, $pw);
		
		if (!$conn) {
			echo "Error: Unable to connect to MySQL." . PHP_EOL;
			echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
			echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
			exit;
		}
		
		echo $_POST['fname'];
		
		if (isset($_POST['submitbutton'])){
			
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$zip = $_POST['zip'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			
			$query	= "INSERT INTO customers VALUES ('$fname', '$lname', '$address', '$city', '$state', '$zip', '$email', '$phone')";
			
			$sql = mysqli_query($conn, $query);
			
		}
		mysqli_close($conn);
?>
	
