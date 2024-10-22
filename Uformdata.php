<?php

include("connection.php");

if(isset($_POST["nextbtn"])){

$p_dob = $_POST["dob"];
$p_phone = $_POST["number"];
$p_gender = $_POST["level"];
$p_occupation = $_POST["occupation"];
$conditions = $_POST["condition"];
$body_part = $_POST["bpart"];
$severity = $_POST["severity"];
    
$qry = "INSERT INTO patient (dob,number,level,occupation,condition,bpart,severity) VALUES ('$p_dob','$p_phone','$p_gender','$p_occupation','$condition','$body_part','$severity')";
   
if (mysqli_query($conn, $qry)) {
    echo "\n New record created successfully";
    header("location:./patient.html");
}
else{
    echo"not inserted ";
}
}