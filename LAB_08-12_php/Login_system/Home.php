<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link rel="stylesheet" type="text/css" href="">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: lightblue">

<div align="center" style="background-color: lightgreen">
<img src="css/ICT.jpg"/>
<?php

session_start();

$pass = $_SESSION['mypassword'];
$myname = $_SESSION['myname'];

$myname=strtoupper($myname);

echo "<h1>Mr./Ms."."  $myname </h1>";
echo "<h2>Welcome to ICT Dept.</h2>";

#session_destroy();

?>
</div>
</body>
</html>
