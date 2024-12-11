<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); //connection string

$user = $_POST['username'];
$pass = $_POST['password'];
$email =$_POST['email'];
$phone = $_POST['phone'];


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO register (Username,Pass, Email, Phoneno)
VALUES ('$user','$pass','$email','$phone')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>