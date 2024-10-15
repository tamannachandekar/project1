<?php

include("connection.php");



if(isset($_POST["signButton"])){

$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["password"];


$qry = "INSERT INTO user (name,email,pass) VALUES ('$name','$email','$pass')";

if (mysqli_query($conn, $qry)) {
    echo "\n New record created successfully";
    header("Location:./home.html");
  }
  else{
    echo"not inserted ";
  }
}