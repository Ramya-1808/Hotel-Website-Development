<?php
session_start();
$username=filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)&&!empty($password))
{
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hotel";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else
{
  $checkarray = "SELECT * FROM register WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $checkarray);
   if (mysqli_num_rows($result) == 1) {
	  echo"Welcome! You are logged in now for further booking on dining and events!";
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: info4.html');
  	}else {
		echo"Wrong username/password combination!";
 
	}
}
}
else{
echo"Empty username/password!";
die();
}
?>
	
		   