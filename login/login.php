<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newLogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); //connection string

$email = $_POST['email'];
$pass = $_POST['password'];

$email = stripcslashes($email);  
$password = stripcslashes($password);  
$email = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
$conn->close();
?>