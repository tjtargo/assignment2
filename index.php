<?php
// DB credentials 
$hn = 'www.it354.com';
$db = 'it354_students';
$un = 'it354_students';
$pw = 'steinway';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM customers";
$result = $conn->query($query);
if (!$result) die($conn->error);

$tableString = ""; // Stores all rows that will be displayed in the customer html table

// Loop through all rows fetched from database query, adding data to $tableString
while ($row = $result->fetch_assoc()) {
	$tableString .= "<tr>";
	$tableString .= ("<td>" . $row["lastName"] . "</td>");
	$tableString .= ("<td>" . $row["firstName"] . "</td>");
	$tableString .= ("<td>" . $row["address"] . "</td>");
	$tableString .= ("<td>" . $row["city"] . "</td>");
	$tableString .= ("<td>" . $row["state"] . "</td>");
	$tableString .= ("<td>" . $row["zip"] . "</td>");
	$tableString .= ("<td>" . $row["email"] . "</td>");
	$tableString .= ("<td>" . $row["phone"] . "</td>");
	$tableString .= "</tr>";
}

$result->close();
$conn->close();
?>

<html>
<head>
	<title>Assignment 2</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<!-- J-Philly was here. I hope this counts because I don't want to change Tom's code -->
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Assignment 2</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">View <span class="sr-only">(current)</span></a></li>
					<li><a href="customer_add.html">Add</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<th>Last/Company Name</th>
				<th>First Name</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Zip</th>
				<th>Email</th>
				<th>Phone</th>
			</tr>
			<?php echo $tableString; ?>
		</table>
	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>	