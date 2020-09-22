<?php

$host="localhost"; // Host name
$username="rakib"; // Mysql username
$password="rakib03"; // Mysql password
$db_name="test"; // Database name
$tbl_name="user"; // Table name



// Connect to server and select databse.
$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($con,"$db_name")or die("cannot select DB");

echo "Server Connection ";


// username and password sent from form

$myemail=$_POST['email'];
$mypassword=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
//$myusername = stripslashes($myusername);
//$mypassword = stripslashes($mypassword);
//$myusername = mysql_real_escape_string($myusername);
//$mypassword = mysql_real_escape_string($mypassword);

//$sql="INSERT INTO $tbl_name ";

$sql="SELECT * FROM user WHERE email='$myemail' and password='$mypassword'";

$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

echo "string 122";
if($count==1)
{

	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$myname=$row["name"];
	// Register $myusername, $mypassword and redirect to file "login_success.php"
	session_start();
	
	$_SESSION['myemail'] = $myemail;
	$_SESSION['mypassword'] = $mypassword;
	$_SESSION['myname']= $myname;	
 	

	header("location:Home.php");
}

else {
echo "Wrong Username or Password";
}


?>