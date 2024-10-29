<?php

include("connection.php");

if(isset($_POST["nextbtn"])){

$c_specialization = $_POST["Specialization"];
$c_phone = $_POST["MobileNumber"];
$c_gender = $_POST["level"];
$certification = $_POST["Certification"];
$experience = $_POST["Experience"];
$associated_facility = $_POST["AssociatedFacility"];

$result = mysqli_query($conn, "SELECT consultant_id FROM consultant ORDER BY consultant_id DESC LIMIT 1");
    if ($row = mysqli_fetch_assoc($result)) {
        $consultant_id = $row['consultant_id'];
    
$qry = "UPDATE consultant
        SET c_specialization = '$c_specialization',
            c_phone = '$c_phone',
            c_gender = '$c_gender',
            certification = '$certification',
            experience = '$experience',
            associated_facility = '$associated_facility'
        WHERE consultant_id = '$consultant_id'"; 
        
if (mysqli_query($conn, $qry)) {
    echo "\n New record created successfully";
    header("location:./admin.php");
}
else{
    echo"not inserted ";
}
}
}