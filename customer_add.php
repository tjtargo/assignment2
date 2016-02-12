<?php //customer_add.php

$hn = 'www.it354.com';
$db = 'it354_students';
$un = 'it354_students';
$pw = 'steinway';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

 if ($_POST['submitbutton']){
	
		$fname 		= get_post($conn, 'fname');
		$lname 		= get_post($conn, 'lname');
		$address 	= get_post($conn, 'address');
		$city 		= get_post($conn, 'city');
		$state 		= get_post($conn, 'state');
		$zip 		= get_post($conn, 'zip');
		$email 		= get_post($conn, 'email');
		$phone 		= get_post($conn, 'phone');
		
		$query	= "INSERT INTO customers VALUES" . 
		"('$fname', '$lname', '$address', '$city', '$state', '$zip', '$email', '$phone')";
		
		$result = $conn->query($query);
		if(!$result) die ("Database access failed: " . $conn->error);

 }
$result->close();
$conn->close();
?>


<!-- if (isset($_POST['fname']) 		&&
	isset($_POST['lname']) 		&&
	isset($_POST['address']) 	&&
	isset($_POST['city']) 		&&
	isset($_POST['state']) 		&&
	isset($_POST['zip']) 		&&
	isset($_POST['email']) 		&&
	isset($_POST['phone']) -->