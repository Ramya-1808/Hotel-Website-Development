<?php
session_start();
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
if (!empty($password)){
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
else{
	// first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $checkarray = "SELECT * FROM register WHERE username='$username' OR password='$password' LIMIT 1";
  $result = mysqli_query($conn, $checkarray);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      echo"Username already exists."."<br>";
    }

    if ($user['password'] === $password) {
      echo"Password already exists.";
	  die();
    }
	
  }
$sql = "INSERT INTO register (username, password)
values ('$username','$password')";
if ($conn->query($sql)){
echo "You have registered!"."<br>";
header('location: login.html');

 
}
  
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
 
?>