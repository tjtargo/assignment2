<?php //customer_add.php

$hn = 'www.it354.com';
$db = 'it354_students';
$un = 'it354_students';
$pw = 'steinway';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$stmt = $conn->prepare("INSERT INTO customers (firstname, lastname, address, city, state, zip, email, phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

$fname = $lname = $address = $city = $state = $zip = $email = $phone = '';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$stmt->bind_param("ssssssss", $fname, $lname, $address, $city, $state, $zip, $email, $phone);

$stmt->execute();
$stmt->close();
$conn->close();
?>