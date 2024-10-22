<?php

include("connection.php");

if(isset($_POST["nextbtn"])){

$c_specialization = $_POST["Specialization"];
$c_phone = $_POST["MobileNumber"];
$c_gender = $_POST["level"];
$certification = $POST["Certification"];
$experience = $POST["Experience"];
$associated_facility = $POST["AssociatedFacility"];
    
$qry = "INSERT INTO consultant (c_specialization,c_phoner,c_gender,certification,experience,associated_facility)
        VALUES ('$c_specialization','$c_phone','$c_gender','$certification','$experience','$associated_facility')";



if (mysqli_query($conn, $qry)) {
    header("Location: admin.php");
    exit();
}
else{
    echo "Error: " . mysqli_error($conn);
}
}