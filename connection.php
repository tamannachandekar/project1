<?php
$servername = "localhost";
$username = "root";
$password = "";
$Db="rehab";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$Db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
  echo "Connected successfully";
}