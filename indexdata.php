<?php

include("connection.php");



if(isset($_POST["signButton"])){

$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["password"];


$qry = "INSERT INTO user (name,email,pass) VALUES ('$name','$email','$pass')";

if(mysqli_query($conn,$qry)){
  echo "\n new record created successfully";

  if(isset($_POST['level'])){
    $level=$_POST['level'];

    if($level=='1'){
      header("location:./Aform.php");
      exit;
    }
    elseif($level=="2"){
      header("location:./Uform.php");
      exit;
    }
    else{
      echo "invalid role selected";
    }
  } 
  else{
    echo " please select role";
  }
  }
  
}
else{
  echo "not inserted";
}