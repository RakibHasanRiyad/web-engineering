<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password-->rakib03
$db_name="test"; // Database name
$tbl_name="user"; // Table name


//echo "Server Connection 01";

// Connect to server and select databse.
$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($con,"$db_name")or die("cannot select DB");

//echo "Server Connection 02";


// username and password sent from form
$myusername=$_POST['name'];
$myemail=$_POST['email'];
$myphone=$_POST['phone'];
$mypassword=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
//$myusername = stripslashes($myusername);
//$mypassword = stripslashes($mypassword);
//$myusername = mysql_real_escape_string($myusername);
//$mypassword = mysql_real_escape_string($mypassword);

//$sql="INSERT INTO $tbl_name ";

$sql="INSERT INTO user (name,email,phone,password) 
		VALUES ('$myusername', '$myemail', '$myphone', '$mypassword') ";

mysqli_query($con,$sql);

header("location:registration_success.php");
?>


